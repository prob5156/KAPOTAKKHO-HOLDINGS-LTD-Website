-- Views for KAPOTAKKHO Holdings

-- 1. VW_ACTIVE_DASHBOARD_STATS
CREATE OR REPLACE VIEW VW_ACTIVE_DASHBOARD_STATS AS
SELECT
    (SELECT COUNT(*) FROM employees WHERE status = 'Active') AS active_employees,
    (SELECT COUNT(*) FROM jobs WHERE status = 'Open' AND deadline >= CURRENT_DATE) AS open_jobs,
    (SELECT COUNT(*) FROM projects WHERE status = 'In Progress') AS active_projects,
    (SELECT COUNT(*) FROM clients) AS total_clients,
    (SELECT COUNT(*) FROM departments WHERE status = 'Active') AS active_departments
FROM DUAL;
/

-- 2. VW_EMPLOYEE_DEPARTMENT_DETAIL
CREATE OR REPLACE VIEW VW_EMPLOYEE_DEPARTMENT_DETAIL AS
SELECT
    e.id AS employee_id, e.name AS employee_name, e.email, e.position, e.status AS employee_status,
    e.join_date, e.department AS department_name, d.manager AS department_manager, d.code AS department_code
FROM employees e
LEFT JOIN departments d ON UPPER(e.department) = UPPER(d.name);
/

-- 3. VW_PROJECT_CLIENT_SUMMARY
CREATE OR REPLACE VIEW VW_PROJECT_CLIENT_SUMMARY AS
SELECT
    p.id AS project_id, p.name AS project_name, p.status AS project_status,
    p.start_date, p.end_date, p.client AS client_name, c.id AS client_id
FROM projects p
LEFT JOIN clients c ON UPPER(p.client) = UPPER(c.company_name);
/

-- 4. VW_OPEN_JOB_LISTINGS
CREATE OR REPLACE VIEW VW_OPEN_JOB_LISTINGS AS
SELECT id, title, department, type, deadline, description
FROM jobs
WHERE status = 'Open' AND deadline >= CURRENT_DATE;
/
