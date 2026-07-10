-- Master Setup Script for KAPOTAKKHO Holdings

PROMPT Creating Sequences...
CREATE SEQUENCE SEQ_CUSTOM_REPORT_ID START WITH 1000 INCREMENT BY 1 MINVALUE 1000 NOCACHE NOCYCLE;
CREATE SEQUENCE SEQ_CONTACT_TICKET START WITH 5001 INCREMENT BY 1 MINVALUE 5001 NOCACHE NOCYCLE;
CREATE SEQUENCE SEQ_EMPLOYEE_BADGE START WITH 2001 INCREMENT BY 1 MINVALUE 2001 NOCACHE NOCYCLE;

PROMPT Creating Views...
CREATE OR REPLACE VIEW VW_ACTIVE_DASHBOARD_STATS AS
SELECT
    (SELECT COUNT(*) FROM employees WHERE status = 'Active') AS active_employees,
    (SELECT COUNT(*) FROM jobs WHERE status = 'Open' AND deadline >= CURRENT_DATE) AS open_jobs,
    (SELECT COUNT(*) FROM projects WHERE status = 'In Progress') AS active_projects,
    (SELECT COUNT(*) FROM clients) AS total_clients,
    (SELECT COUNT(*) FROM departments WHERE status = 'Active') AS active_departments
FROM DUAL;

CREATE OR REPLACE VIEW VW_EMPLOYEE_DEPARTMENT_DETAIL AS
SELECT e.id, e.name, e.email, e.position, e.status, e.join_date, e.department, d.manager, d.code
FROM employees e LEFT JOIN departments d ON UPPER(e.department) = UPPER(d.name);

CREATE OR REPLACE VIEW VW_PROJECT_CLIENT_SUMMARY AS
SELECT p.id, p.name, p.status, p.start_date, p.end_date, p.client, c.id AS client_id
FROM projects p LEFT JOIN clients c ON UPPER(p.client) = UPPER(c.company_name);

CREATE OR REPLACE VIEW VW_OPEN_JOB_LISTINGS AS
SELECT id, title, department, type, deadline, description FROM jobs
WHERE status = 'Open' AND deadline >= CURRENT_DATE;

PROMPT Creating Functions...
CREATE OR REPLACE FUNCTION GET_PROJECTS_COUNT(p_client_name IN VARCHAR2) RETURN NUMBER IS v_count NUMBER := 0;
BEGIN SELECT COUNT(*) INTO v_count FROM projects WHERE client = p_client_name; RETURN v_count;
EXCEPTION WHEN OTHERS THEN RETURN 0; END;
/
CREATE OR REPLACE FUNCTION GET_EMPLOYEE_TENURE(p_emp_id IN employees.id%TYPE) RETURN NUMBER IS v_tenure NUMBER := 0;
BEGIN SELECT FLOOR(MONTHS_BETWEEN(SYSDATE, join_date) / 12) INTO v_tenure FROM employees WHERE id = p_emp_id; RETURN NVL(v_tenure, 0);
EXCEPTION WHEN OTHERS THEN RETURN 0; END;
/
CREATE OR REPLACE FUNCTION GET_DEPARTMENT_HEADCOUNT(p_dept_name IN VARCHAR2) RETURN NUMBER IS v_count NUMBER := 0;
BEGIN SELECT COUNT(*) INTO v_count FROM employees WHERE department = p_dept_name AND status = 'Active'; RETURN v_count;
EXCEPTION WHEN OTHERS THEN RETURN 0; END;
/
CREATE OR REPLACE FUNCTION GET_OPEN_JOBS_COUNT RETURN NUMBER IS v_count NUMBER := 0;
BEGIN SELECT COUNT(*) INTO v_count FROM jobs WHERE status = 'Open' AND deadline >= CURRENT_DATE; RETURN v_count;
EXCEPTION WHEN OTHERS THEN RETURN 0; END;
/
CREATE OR REPLACE FUNCTION IS_VALID_EMAIL(p_email IN VARCHAR2) RETURN VARCHAR2 IS
BEGIN IF REGEXP_LIKE(p_email, '^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$') THEN RETURN 'YES'; ELSE RETURN 'NO'; END IF; END;
/

PROMPT Creating Procedures...
CREATE OR REPLACE PROCEDURE MARK_PROJECT_COMPLETED(p_id IN projects.id%TYPE) IS v_status projects.status%TYPE;
BEGIN SELECT status INTO v_status FROM projects WHERE id = p_id;
IF v_status = 'Completed' THEN RAISE_APPLICATION_ERROR(-20010, 'Project already Completed.'); END IF;
UPDATE projects SET status = 'Completed', end_date = CURRENT_DATE, updated_at = CURRENT_TIMESTAMP WHERE id = p_id; COMMIT;
EXCEPTION WHEN OTHERS THEN ROLLBACK; RAISE; END;
/
CREATE OR REPLACE PROCEDURE CLOSE_EXPIRED_JOBS(p_closed_count OUT NUMBER) IS
BEGIN UPDATE jobs SET status = 'Closed', updated_at = CURRENT_TIMESTAMP WHERE status = 'Open' AND deadline < CURRENT_DATE;
p_closed_count := SQL%ROWCOUNT; COMMIT;
EXCEPTION WHEN OTHERS THEN ROLLBACK; p_closed_count := -1; RAISE; END;
/
CREATE OR REPLACE PROCEDURE ADD_EMPLOYEE_TO_DEPARTMENT(
    p_name IN employees.name%TYPE, p_email IN employees.email%TYPE, p_department IN employees.department%TYPE,
    p_position IN employees.position%TYPE, p_join_date IN employees.join_date%TYPE) IS v_dept_count NUMBER;
BEGIN SELECT COUNT(*) INTO v_dept_count FROM departments WHERE name = p_department;
IF v_dept_count = 0 THEN RAISE_APPLICATION_ERROR(-20020, 'Department not found.'); END IF;
INSERT INTO employees (name, email, department, position, join_date, status, created_at, updated_at)
VALUES (INITCAP(p_name), p_email, p_department, p_position, p_join_date, 'Active', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP); COMMIT;
EXCEPTION WHEN OTHERS THEN ROLLBACK; RAISE; END;
/
CREATE OR REPLACE PROCEDURE PROC_GET_OPEN_JOBS(p_cursor OUT SYS_REFCURSOR) IS
BEGIN OPEN p_cursor FOR SELECT id, title, department, type, deadline FROM jobs WHERE status = 'Open' AND deadline >= CURRENT_DATE; END;
/
CREATE OR REPLACE PROCEDURE PROC_GET_CLIENT_PROJECTS(p_client_name IN VARCHAR2, p_cursor OUT SYS_REFCURSOR) IS
BEGIN OPEN p_cursor FOR SELECT id, name, status, start_date, end_date FROM projects WHERE UPPER(client) = UPPER(p_client_name); END;
/

PROMPT Creating Triggers...
CREATE OR REPLACE TRIGGER TRG_CAPITALIZE_EMP_NAME BEFORE INSERT OR UPDATE OF name ON employees FOR EACH ROW
BEGIN :NEW.name := INITCAP(:NEW.name); END;
/
CREATE OR REPLACE TRIGGER TRG_PREVENT_ACTIVE_PROJ_DEL BEFORE DELETE ON projects FOR EACH ROW
BEGIN IF :OLD.status = 'In Progress' THEN RAISE_APPLICATION_ERROR(-20001, 'Cannot delete active project.'); END IF; END;
/
CREATE OR REPLACE TRIGGER TRG_SET_EMPLOYEE_TIMESTAMPS BEFORE INSERT ON employees FOR EACH ROW
BEGIN IF :NEW.created_at IS NULL THEN :NEW.created_at := CURRENT_TIMESTAMP; END IF;
IF :NEW.updated_at IS NULL THEN :NEW.updated_at := CURRENT_TIMESTAMP; END IF; END;
/
CREATE OR REPLACE TRIGGER TRG_UPPERCASE_DEPT_CODE BEFORE INSERT OR UPDATE OF code ON departments FOR EACH ROW
BEGIN IF :NEW.code IS NOT NULL THEN :NEW.code := UPPER(:NEW.code); END IF; END;
/
CREATE OR REPLACE TRIGGER TRG_LOG_PROJECT_STATUS_CHANGE AFTER UPDATE OF status ON projects FOR EACH ROW
BEGIN IF :OLD.status != :NEW.status THEN DBMS_OUTPUT.PUT_LINE('Project ' || :NEW.id || ' status changed.'); END IF; END;
/
