<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$statements = [
    // FUNCTIONS
    "CREATE OR REPLACE FUNCTION GET_PROJECTS_COUNT(client_name_in IN VARCHAR2) RETURN NUMBER IS v_count NUMBER; BEGIN SELECT COUNT(*) INTO v_count FROM projects WHERE client = client_name_in; RETURN v_count; END GET_PROJECTS_COUNT;",
    "CREATE OR REPLACE FUNCTION GET_EMPLOYEE_TENURE(emp_id_in IN NUMBER) RETURN NUMBER IS v_tenure_years NUMBER; BEGIN SELECT FLOOR(MONTHS_BETWEEN(SYSDATE, join_date) / 12) INTO v_tenure_years FROM employees WHERE id = emp_id_in; RETURN NVL(v_tenure_years, 0); EXCEPTION WHEN NO_DATA_FOUND THEN RETURN 0; END GET_EMPLOYEE_TENURE;",
    // PROCEDURES
    "CREATE OR REPLACE PROCEDURE MARK_PROJECT_COMPLETED(p_id IN NUMBER) IS BEGIN UPDATE projects SET status = 'Completed', end_date = CURRENT_DATE, updated_at = CURRENT_TIMESTAMP WHERE id = p_id; COMMIT; END MARK_PROJECT_COMPLETED;",
    "CREATE OR REPLACE PROCEDURE CLOSE_EXPIRED_JOBS(p_archived_count OUT NUMBER) IS BEGIN UPDATE jobs SET status = 'Closed', updated_at = CURRENT_TIMESTAMP WHERE status = 'Open' AND deadline < CURRENT_DATE; p_archived_count := SQL%ROWCOUNT; COMMIT; END CLOSE_EXPIRED_JOBS;",
    // TRIGGERS
    "CREATE OR REPLACE TRIGGER TRG_CAPITALIZE_EMP_NAME BEFORE INSERT OR UPDATE OF name ON employees FOR EACH ROW BEGIN :NEW.name := INITCAP(:NEW.name); END TRG_CAPITALIZE_EMP_NAME;",
    "CREATE OR REPLACE TRIGGER TRG_PREVENT_ACTIVE_PROJ_DEL BEFORE DELETE ON projects FOR EACH ROW BEGIN IF :OLD.status = 'In Progress' THEN RAISE_APPLICATION_ERROR(-20001, 'Cannot delete a project that is currently In Progress.'); END IF; END TRG_PREVENT_ACTIVE_PROJ_DEL;",
    // CURSORS
    "CREATE OR REPLACE PROCEDURE PROC_GET_OPEN_JOBS(p_cursor OUT SYS_REFCURSOR) IS BEGIN OPEN p_cursor FOR SELECT id, title, department, deadline FROM jobs WHERE status = 'Open' ORDER BY deadline ASC; END PROC_GET_OPEN_JOBS;",
    // VIEWS (No semicolon)
    "CREATE OR REPLACE VIEW VW_ACTIVE_DASHBOARD_STATS AS SELECT (SELECT COUNT(*) FROM employees WHERE status = 'Active') AS active_employees, (SELECT COUNT(*) FROM jobs WHERE status = 'Open') AS open_jobs, (SELECT COUNT(*) FROM projects WHERE status = 'In Progress') AS active_projects FROM DUAL",
    // SEQUENCES (No semicolon)
    "CREATE SEQUENCE SEQ_CUSTOM_REPORT_ID START WITH 1000 INCREMENT BY 1 NOCACHE NOCYCLE"
];

foreach($statements as $stmt) {
    try {
        DB::unprepared($stmt);
        echo "Successfully executed statement.\n";
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}
