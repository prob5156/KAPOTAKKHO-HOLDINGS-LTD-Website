-- Cursors for KAPOTAKKHO Holdings

-- 1. Anonymous Block: Employee Tenure
SET SERVEROUTPUT ON;
DECLARE
    CURSOR cur_active_employees IS
        SELECT id, name, join_date, department FROM employees WHERE status = 'Active' ORDER BY join_date ASC;
    v_emp cur_active_employees%ROWTYPE;
    v_years NUMBER;
BEGIN
    OPEN cur_active_employees;
    LOOP
        FETCH cur_active_employees INTO v_emp;
        EXIT WHEN cur_active_employees%NOTFOUND;
        v_years := FLOOR(MONTHS_BETWEEN(SYSDATE, v_emp.join_date) / 12);
        DBMS_OUTPUT.PUT_LINE(v_emp.name || ' - ' || v_years || ' years');
    END LOOP;
    CLOSE cur_active_employees;
END;
/

-- 2. Anonymous Block: Active Projects
SET SERVEROUTPUT ON;
DECLARE
    CURSOR cur_active_projects IS
        SELECT p.id, p.name AS project_name, p.client FROM projects p
        WHERE p.status = 'In Progress' ORDER BY p.start_date DESC;
    v_proj cur_active_projects%ROWTYPE;
BEGIN
    OPEN cur_active_projects;
    LOOP
        FETCH cur_active_projects INTO v_proj;
        EXIT WHEN cur_active_projects%NOTFOUND;
        DBMS_OUTPUT.PUT_LINE(v_proj.project_name || ' - ' || NVL(v_proj.client, 'No Client'));
    END LOOP;
    CLOSE cur_active_projects;
END;
/

-- 3. PROC_GET_OPEN_JOBS
CREATE OR REPLACE PROCEDURE PROC_GET_OPEN_JOBS(p_cursor OUT SYS_REFCURSOR) IS
BEGIN
    OPEN p_cursor FOR
        SELECT id, title, department, type, deadline FROM jobs
        WHERE status = 'Open' AND deadline >= CURRENT_DATE ORDER BY deadline ASC;
END;
/

-- 4. PROC_GET_CLIENT_PROJECTS
CREATE OR REPLACE PROCEDURE PROC_GET_CLIENT_PROJECTS(
    p_client_name IN VARCHAR2, p_cursor OUT SYS_REFCURSOR
) IS
BEGIN
    OPEN p_cursor FOR
        SELECT id, name, status, start_date, end_date FROM projects
        WHERE UPPER(client) = UPPER(p_client_name) ORDER BY start_date DESC;
END;
/
