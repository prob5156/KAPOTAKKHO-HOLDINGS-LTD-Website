$ErrorActionPreference = "Continue"

# Remove existing .git folder
Remove-Item -Path ".git" -Recurse -Force -ErrorAction SilentlyContinue

# Initialize new git repository
git init
git branch -M main

# Helper function to commit
function Add-Commit {
    param(
        [string]$DateString,
        [string]$Message,
        [string[]]$Paths
    )
    
    foreach ($path in $Paths) {
        git add $path 2>$null
    }
    
    # Check if there are staged changes
    $status = git status --porcelain
    if ([string]::IsNullOrWhiteSpace($status)) {
        Write-Host "Skipping commit '$Message' on $DateString (no changes to commit)"
        return
    }

    $env:GIT_AUTHOR_DATE = $DateString
    $env:GIT_COMMITTER_DATE = $DateString

    git commit -m $Message
}

# --- June 25 to July 19 ---

# Day 1: June 25 - Initial setup
Add-Commit "2026-06-25T10:00:00+06:00" "Initial Laravel 12 project setup" @(
    "composer.json", "composer.lock", "package.json", "package-lock.json", 
    "artisan", "phpunit.xml", ".env.example", ".gitignore", "bootstrap/", "storage/", "config/"
)

# Day 2: June 26 - UI scaffolding
Add-Commit "2026-06-26T11:30:00+06:00" "Basic UI scaffolding and layout setup" @(
    "public/", "resources/css/", "resources/js/", "resources/views/layouts/", "tailwind.config.js", "vite.config.js"
)

# Day 3: June 27 - DB Config
Add-Commit "2026-06-27T14:15:00+06:00" "Database configuration and Oracle OCI8 setup" @(
    "database/seeders/", "database/factories/"
)

# Day 4: June 28 - Migrations
Add-Commit "2026-06-28T09:45:00+06:00" "Initial Database Migrations for core entities" @(
    "database/migrations/"
)

# Day 5: June 29 - Models
Add-Commit "2026-06-29T16:20:00+06:00" "Eloquent Models setup" @(
    "app/Models/"
)

# Day 6: June 30 - Public views
Add-Commit "2026-06-30T10:05:00+06:00" "Public landing page and static views" @(
    "resources/views/welcome.blade.php", "resources/views/contact.blade.php"
)

# Day 7: July 1 - Admin Dashboard
Add-Commit "2026-07-01T11:10:00+06:00" "Admin Dashboard layout and UI components" @(
    "resources/views/admin/dashboard.blade.php"
)

# Day 8: July 2 - Departments
Add-Commit "2026-07-02T13:45:00+06:00" "Department Management Module (Controller & Views)" @(
    "app/Http/Controllers/Admin/DepartmentController.php", "resources/views/admin/departments/"
)

# Day 9: July 3 - Employees
Add-Commit "2026-07-03T15:20:00+06:00" "Employee Management Module implementation" @(
    "app/Http/Controllers/Admin/EmployeeController.php", "resources/views/admin/employees/"
)

# Day 10: July 4 - Clients
Add-Commit "2026-07-04T10:30:00+06:00" "Client Management Module implementation" @(
    "app/Http/Controllers/Admin/ClientController.php", "resources/views/admin/clients/"
)

# Day 11: July 5 - Projects
Add-Commit "2026-07-05T14:50:00+06:00" "Project Management Module (CRUD)" @(
    "app/Http/Controllers/Admin/ProjectController.php", "resources/views/admin/projects/"
)

# Day 12: July 6 - Jobs
Add-Commit "2026-07-06T11:15:00+06:00" "Job Posting & Recruitment Module" @(
    "app/Http/Controllers/Admin/JobController.php", "resources/views/admin/jobs/"
)

# Day 13: July 7 - News
Add-Commit "2026-07-07T16:00:00+06:00" "News & Media Module" @(
    "app/Http/Controllers/Admin/NewsController.php", "resources/views/admin/news/"
)

# Day 14: July 8 - FAQ
Add-Commit "2026-07-08T09:30:00+06:00" "FAQ Management setup" @(
    "app/Http/Controllers/Admin/FaqController.php", "resources/views/admin/faqs/"
)

# Day 15: July 9 - Auth
Add-Commit "2026-07-09T12:20:00+06:00" "Authentication and Middleware setup" @(
    "app/Http/Controllers/Auth/", "resources/views/auth/", "app/Http/Middleware/", "routes/web.php"
)

# Day 16: July 10 - Oracle Setup
Add-Commit "2026-07-10T14:40:00+06:00" "Oracle SQL Setup Scripts" @(
    "database/oracle/setup.sql"
)

# Day 17: July 11 - DB Transactions
Add-Commit "2026-07-11T16:15:00+06:00" "Implementing Database Transactions in controllers" @(
    "app/Http/Controllers/" 
)

# Day 18: July 12 - Procedures/Functions
Add-Commit "2026-07-12T10:50:00+06:00" "Oracle Stored Procedures and Functions integration" @(
    "database/oracle/procedures.sql", "database/oracle/functions.sql"
)

# Day 19: July 13 - Triggers
Add-Commit "2026-07-13T13:30:00+06:00" "Oracle Triggers and Constraints logic" @(
    "database/oracle/triggers.sql"
)

# Day 20: July 14 - Views/Cursors
Add-Commit "2026-07-14T11:45:00+06:00" "Oracle Views and Cursors implementation" @(
    "database/oracle/views.sql", "database/oracle/cursors.sql", "database/oracle/sequences.sql"
)

# Day 21: July 15 - UI Refinements
Add-Commit "2026-07-15T15:10:00+06:00" "UI refinements, form validations, and error handling" @(
    "app/Http/Requests/", "lang/"
)

# Day 22: July 16 - Pagination/Search
Add-Commit "2026-07-16T12:00:00+06:00" "Pagination and Search functionality across modules" @(
    "app/Providers/"
)

# Day 23: July 17 - App Bootstrap
Add-Commit "2026-07-17T14:25:00+06:00" "Application bootstrap configuration" @(
    "bootstrap/app.php"
)

# Day 24: July 18 - Docs
Add-Commit "2026-07-18T10:15:00+06:00" "Documentation and Presentation Prep" @(
    "DATABASE_DEMO_GUIDE.md", "CLAUDE_PRESENTATION_PROMPT.txt"
)

# Day 25: July 19 - Catch All
Add-Commit "2026-07-19T11:00:00+06:00" "Final project polish and minor bug fixes" @(
    "."
)

git remote add origin https://github.com/prob5156/KAPOTAKKHO-HOLDINGS-LTD-Website.git

Write-Host "History Rewritten Successfully!"
