-- Procedures for KAPOTAKKHO Holdings

-- 1. MARK_PROJECT_COMPLETED
CREATE OR REPLACE PROCEDURE MARK_PROJECT_COMPLETED(
    p_id IN projects.id%TYPE
) IS
    v_status projects.status%TYPE;
BEGIN
    SELECT status INTO v_status FROM projects WHERE id = p_id;
    IF v_status = 'Completed' THEN
        RAISE_APPLICATION_ERROR(-20010, 'Project is already Completed.');
    END IF;

    UPDATE projects
    SET status = 'Completed', end_date = CURRENT_DATE, updated_at = CURRENT_TIMESTAMP
    WHERE id = p_id;
    COMMIT;
EXCEPTION
    WHEN NO_DATA_FOUND THEN RAISE_APPLICATION_ERROR(-20011, 'Project not found.');
    WHEN OTHERS THEN ROLLBACK; RAISE;
END;
/

-- 2. CLOSE_EXPIRED_JOBS
CREATE OR REPLACE PROCEDURE CLOSE_EXPIRED_JOBS(
    p_closed_count OUT NUMBER
) IS
BEGIN
    UPDATE jobs SET status = 'Closed', updated_at = CURRENT_TIMESTAMP
    WHERE status = 'Open' AND deadline < CURRENT_DATE;
    p_closed_count := SQL%ROWCOUNT;
    COMMIT;
EXCEPTION
    WHEN OTHERS THEN ROLLBACK; p_closed_count := -1; RAISE;
END;
/

-- 3. ADD_EMPLOYEE_TO_DEPARTMENT
CREATE OR REPLACE PROCEDURE ADD_EMPLOYEE_TO_DEPARTMENT(
    p_name IN employees.name%TYPE, p_email IN employees.email%TYPE,
    p_department IN employees.department%TYPE, p_position IN employees.position%TYPE,
    p_join_date IN employees.join_date%TYPE
) IS
    v_dept_count NUMBER;
BEGIN
    SELECT COUNT(*) INTO v_dept_count FROM departments WHERE name = p_department;
    IF v_dept_count = 0 THEN
        RAISE_APPLICATION_ERROR(-20020, 'Department does not exist.');
    END IF;

    INSERT INTO employees (name, email, department, position, join_date, status, created_at, updated_at)
    VALUES (INITCAP(p_name), p_email, p_department, p_position, p_join_date, 'Active', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
    COMMIT;
EXCEPTION
    WHEN DUP_VAL_ON_INDEX THEN ROLLBACK; RAISE_APPLICATION_ERROR(-20021, 'Email already exists.');
    WHEN OTHERS THEN ROLLBACK; RAISE;
END;
/

-- 4. ARCHIVE_OLD_NEWS
CREATE OR REPLACE PROCEDURE ARCHIVE_OLD_NEWS(
    p_days_old IN NUMBER DEFAULT 365, p_archived_cnt OUT NUMBER
) IS
BEGIN
    UPDATE news SET updated_at = CURRENT_TIMESTAMP
    WHERE published_date < (CURRENT_DATE - p_days_old);
    p_archived_cnt := SQL%ROWCOUNT;
    COMMIT;
EXCEPTION
    WHEN OTHERS THEN ROLLBACK; p_archived_cnt := -1; RAISE;
END;
/

-- 5. MARK_CONTACT_RESOLVED
CREATE OR REPLACE PROCEDURE MARK_CONTACT_RESOLVED(
    p_contact_id IN contacts.id%TYPE
) IS
    v_count NUMBER;
BEGIN
    SELECT COUNT(*) INTO v_count FROM contacts WHERE id = p_contact_id;
    IF v_count = 0 THEN
        RAISE_APPLICATION_ERROR(-20030, 'Contact enquiry not found.');
    END IF;

    UPDATE contacts SET updated_at = CURRENT_TIMESTAMP WHERE id = p_contact_id;
    COMMIT;
EXCEPTION
    WHEN OTHERS THEN ROLLBACK; RAISE;
END;
/
