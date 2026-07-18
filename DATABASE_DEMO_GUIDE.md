# KAPOTAKKHO HOLDINGS LTD - Database Demo & Viva Guide

Ei guide ti toiri kora hoyese tomar university lab viva ebong final project demonstration er jonno. Ekhane database er A to Z shob kisu Banglish e explain kora ase, jate tumi easily examiner ke bujhate paro.

---

## SECTION 1: Project Database Overview

**Kon Database use kora hoyese?**
Amra ei project e **Oracle 11g Express Edition (XE)** use kortesi.

**Oracle keno use kora hoyese?**
University er Database System Lab er requirement onujayi Oracle database use kora bindhotamulok. Choto startup er jonno MySQL bhalo holeo, KAPOTAKKHO Holdings er moto enterprise application e Oracle er PL/SQL features (Triggers, Procedures, Cursors) onek strong ebong scalable.

**Laravel kivabe Oracle er sathe connect kore?**
Laravel by default MySQL ba PostgreSQL support kore. Oracle connect korar jonno amader ekta external package dorkar hoyese. Package tar nam holo **`yajra/laravel-pdo-via-oci8`**. Ei package ti PHP er native OCI8 extension use kore Oracle er sathe PDO connection toiri kore.

**Exact file paths jekhane configuration ase:**
- `composer.json` (Ekhane package ti install kora ase)
- `.env` (Ekhane connection credentials deya ase)
- `config/database.php` (Ekhane Laravel ke bola hoyese Oracle driver kivabe kaj korbe)

---

## SECTION 2: Database Connection

Database connection setup korar jonno amader main file holo `.env` ebong `config/database.php`.

**1. `.env` file e ki ase?**
Path: `.env`
```env
DB_CONNECTION=oracle
DB_HOST=127.0.0.1
DB_PORT=1521
DB_DATABASE=xe
DB_USERNAME=system
DB_PASSWORD=secret
```
*Explanation:* Ekhane `DB_CONNECTION=oracle` bolte Laravel ke Oracle driver use korte bola hocche. `DB_PORT=1521` holo Oracle er default listener port. 

**2. `config/database.php` e ki ase?**
Path: `config/database.php`
```php
'oracle' => [
    'driver'         => 'oracle',
    'tns'            => env('DB_TNS', ''),
    'host'           => env('DB_HOST', '127.0.0.1'),
    'port'           => env('DB_PORT', '1521'),
    'database'       => env('DB_DATABASE', 'xe'),
    'username'       => env('DB_USERNAME', 'forge'),
    'password'       => env('DB_PASSWORD', ''),
    'charset'        => env('DB_CHARSET', 'AL32UTF8'),
    'prefix'         => env('DB_PREFIX', ''),
],
```
*Explanation:* Laravel jokhon app start kore, tokhon ei file theke oracle array ta read kore ebong OCI8 er maddhome Oracle er sathe bridge toiri kore.

---

## SECTION 3: Migration Files

Laravel e migration file holo database er blueprint. Ekhane amader shob migration ase:
Path: `database/migrations/`

**1. `0001_01_01_000000_create_users_table.php`**
- **Table:** `users`
- **Primary Key:** `id`
- **Unique:** `email`
- **Timestamps:** `created_at`, `updated_at`

**2. `2026_07_12_000001_create_departments_table.php`**
- **Table:** `departments`
- **Primary Key:** `id`
- **Unique:** `code` (Unique constraint migration e add kora ase)
- **Columns:** `name`, `manager`, `status`

**3. `2026_07_12_000002_create_projects_table.php`**
- **Table:** `projects`
- **Primary Key:** `id`
- **Nullable:** `end_date` (Karon project surutei shesh hoy na)
- **Foreign Key Logic:** `client` column ta clients table ke refer kore.

**4. `2026_07_18_080915_add_oracle_constraints_and_indexes.php`**
- *Eta khub important!* Ei file tai purely Database Lab er requirement puron kore.
- **Unique Constraints:** `clients.company_name` ebong `departments.name` e unique key add kora hoyese.
- **Foreign Keys:** `projects.client` refer kore `clients.company_name` ke. Jate client delete hole project error na dey tai `ON DELETE SET NULL` use kora hoyese.
- **Indexes:** Search fast korar jonno `projects.name`, `employees.name` ektate index toiri kora hoyese.

**Laravel kivabe Oracle table banay?**
Jokhon amra `php artisan migrate` run kori, Laravel Schema Builder ei PHP code guloke Oracle DDL (CREATE TABLE) statements e convert kore ebong OCI8 connection er maddhome execute kore.

---

## SECTION 4: Current Database Tables

Ei project e mainly 9 ta business table ase.

**1. Table: `clients`**
- **Purpose:** Company er client ba investor der info rakha.
- **Relations:** 1 Client er multiple Projects thakte pare (One-to-Many).
- **Page:** `/admin/clients`
- **Controller/Model:** `ClientController`, `Client.php`

**2. Table: `projects`**
- **Purpose:** KAPOTAKKHO er ongoing ba completed real estate/infrastructure project er data.
- **Columns:** `id`, `name`, `client`, `status`, `start_date`, `end_date`.
- **Relations:** Belongs to `Client`.
- **Page:** `/admin/projects`
- **Controller/Model:** `ProjectController`, `Project.php`

**3. Table: `departments`**
- **Purpose:** Company er alada division track kora (HR, IT, Civil).
- **Relations:** Has Many Employees, Has Many Jobs.

**4. Table: `employees`**
- **Purpose:** Employee database.
- **Foreign Key:** `department` column ta `departments` table theke ashe.

**5. Table: `jobs`**
- **Purpose:** Career page er jonno job circulars.
- **Controller:** `JobController`.

**6. Table: `news`**
- **Purpose:** Media center ba press release.
- **Page:** `/admin/news`

---

## SECTION 5: Eloquent Models

Models thake `app/Models/` folder e. Era database table er sathe interact kore.

**Model: `app/Models/Project.php`**
```php
protected $fillable = ['name', 'client', 'description', 'start_date', 'end_date', 'status'];
```
- **$fillable Keno?** Mass assignment vulnerability theke bachar jonno. Tumi request theke ja data asbe shob ekbare database e push korte parbe jodi list e name thake.

**Relationships kivabe kora hoyese?**
```php
public function clientData()
{
    return $this->belongsTo(Client::class, 'client', 'company_name');
}
```
- **Explanation:** Project model boltese je tar `client` column ta ashole `Client` model er `company_name` column er sathe related. Eta Eloquent ORM ke Oracle foreign key er byapare janiye dey.

---

## SECTION 6: Controllers

Admin Controllers gulo `app/Http/Controllers/Admin/` e ase.

**Example: `ProjectController.php`**
- **Create/Read:** `index()` method database theke data tule `paginate(10)` kore Blade view te pass kore.
- **Search:** `$query->where('name', 'like', "%{$search}%")` use kora hoyese.
- **Validation:** `store()` method e `$request->validate([...])` ache, jeta submit kora data verify kore.
- **Transactions:** Oracle database e kono operation jate half complete hoye theme na jay, tar jonno `store`, `update`, `destroy` method guloke `DB::transaction(function() { ... })` er bhitor rakha hoyese.

---

## SECTION 7: Routes

Routes thake `routes/web.php` e.

**Flow Diagram:**
Browser (User clicks "Projects") 
↓ 
`routes/web.php` (`Route::get('/admin/projects')`) 
↓ 
`ProjectController@index` method execute hoy 
↓ 
`Project::paginate(10)` Eloquent Model call hoy 
↓ 
Oracle Database e `SELECT * FROM projects` execute hoy 
↓ 
Data ferot ashe controller e 
↓ 
Controller theke `view('admin.projects.index', compact('projects'))` render hoy 
↓ 
User Browser e webpage dekhte pay.

---

## SECTION 8: Blade Files

Blade files gulo HTML ebong PHP er combination. Ase `resources/views/` e.

**Example: `resources/views/admin/projects/index.blade.php`**
- Controller theke `$projects` variable ta ashe.
- **Foreach loop:** `@foreach($projects as $project)` run hoy.
- **Data show:** `{{ $project->name }}` likhle database er column theke nam ta print hoye jay website e.
- **Pagination:** Bottom e `{{ $projects->links() }}` likha ase, jeta page number (1, 2, 3) automatically toiri kore Oracle theke chunk wise data ane.

---

## SECTION 9: Live Demo Section

Viva te exactly emon vabe dekhate hobe:

1. **Open browser** 
   ↓
2. **Go to** `http://127.0.0.1:8000/admin/projects` (Admin Dashboard e login koro).
   ↓
3. Examiner ke **Search** function ta use kore dekhao. Ekta project er nam likhe search koro. (Eta Web Programming Lab er feature).
   ↓
4. **Open VS Code** 
   ↓
5. **Open `routes/web.php`** 
   ↓
6. Line 38 e dekhao: `Route::resource('/admin/projects', ...)` 
   ↓
7. **Open `app/Http/Controllers/Admin/ProjectController.php`** 
   ↓
8. `index()` method dekhao jekhane search ebong pagination er code lekha ase.
   ↓
9. Ekhon examiner ke bolte paro, "Sir, ebar ami Database System Lab er requirement gulo dekhacchi".
   ↓
10. VS Code theke **`database/oracle/procedures.sql`** open koro. (Eta Oracle PL/SQL requirement).
    ↓
11. Dekhao je `MARK_PROJECT_COMPLETED` namer ekta stored procedure toiri kora hoyese.
    ↓
12. Abar **`ProjectController.php`** e jao ebong `update()` method e dekhao je Laravel theke kivabe `DB::statement('BEGIN MARK_PROJECT_COMPLETED(:id); END;')` call kora hoyese! Eta proman kore je Laravel Oracle er stored procedure directly execute korche.

---

## SECTION 10: Oracle SQL

Oracle er natively kora shob PL/SQL file `database/oracle/` e save kora ase jate examiner easily dekhte pare.

- **`procedures.sql`:** `MARK_PROJECT_COMPLETED` (Project completed mark kore ebong end_date set kore) ebong `CLOSE_EXPIRED_JOBS` procedure ase.
- **`functions.sql`:** `GET_PROJECTS_COUNT` (Ekta client er koyta project ase ta count kore) ebong `GET_EMPLOYEE_TENURE` (Employee koto bochor dhore job korche ta return kore).
- **`triggers.sql`:** `TRG_CAPITALIZE_EMP_NAME` (Employee create korar shomoy namer prothom okkhor automatic boro hater kore Oracle e) ebong `TRG_PREVENT_ACTIVE_PROJ_DEL` (Kono project 'In Progress' thakle seta delete korte gele Oracle database theke badha dey).
- **`views.sql`:** `VW_ACTIVE_DASHBOARD_STATS` (Total employee, job, project koto gulo active ase tar count eksathe ekta row te return kore).
- **`cursors.sql`:** `CURSOR_BULK_UPDATE_SALARY` (Ekta PL/SQL block jeta cursor use kore).
- **`sequences.sql`:** `SEQ_CUSTOM_REPORT_ID` (Ekta custom auto-increment id generator).

---

## SECTION 11: Stored Procedure Demo

**Demonstration:**
- **Kothay call hoy?** `app/Http/Controllers/Admin/ProjectController.php` er `update()` method e.
- **Kivabe?** Jokhon kono admin website theke project er status "Completed" e change kore save dey, tokhon Eloquent update kora bad diye Laravel sora-sori Oracle ke bole: `DB::statement('BEGIN MARK_PROJECT_COMPLETED(:id); END;', ['id' => $project->id]);`
- **Proof:** Tumi browser e giye ekta In Progress project ke Edit kore Completed e set koro. Dekhbe auto ajker date ta End Date hishebe add hoye gese. Eta stored procedure er kaaj.

---

## SECTION 12: Functions

**Demonstration:**
- **Purpose:** Function use kora hoy calculation korar jonno ja ekta value return kore.
- **Demo:** VS Code er terminal (tinker) ba Oracle SQL Developer e likho: `SELECT GET_EMPLOYEE_TENURE(1) FROM DUAL;`
- **Output:** Seta employee 1 koto bochor kaj korche tar ekta integer number dibe.

---

## SECTION 13: Triggers

**Demonstration:**
- **Trigger:** `TRG_PREVENT_ACTIVE_PROJ_DEL`
- **When it fires:** `BEFORE DELETE` on `projects` table.
- **How to demo:** Browser e `/admin/projects` e jao. Emon ekta project Delete korar try koro jar status "In Progress" ase.
- **Proof:** Website crash kore ba error dey Oracle theke message ashe `ORA-20001: Cannot delete a project that is currently In Progress`. Karon Laravel SQL DELETE pathay kintu Oracle trigger seta block kore dey. Eta clear proman je Database layer proper protection dicche.

---

## SECTION 14: Views

**SQL View vs Laravel View:**
- **SQL View (`VW_ACTIVE_DASHBOARD_STATS`):** Eta database er bhitor toiri kora ekta virtual table. Eta table theke complex data count kore SQL e rakhche.
- **Laravel View (Blade):** Eta HTML/CSS er file jeta user browser e dekhe (`resources/views/`).

---

## SECTION 15: Transactions

**Where used?** Shob Admin Controller er `store`, `update`, `destroy` method e.
**Why?** Database Transaction (ACID properties) ensure kore je jodi operation majhkhan theke fail kore tahole kono partial data insert hobe na, purota ROLLBACK hoye jabe.
**Demo:** Show VS Code `app/Http/Controllers/Admin/EmployeeController.php` line 32 jekhane `DB::transaction(function () use ($validated) { ... });` kora ase.

---

## SECTION 16: Constraints

Eigulo `database/migrations/2026_07_18_080915_add_oracle_constraints_and_indexes.php` te ase.
- **Primary Key:** Prati table er `id` column.
- **Foreign Key:** `employees.department` refer kore `departments.name` ke. `ON DELETE SET NULL` kora ase.
- **Unique:** `clients.company_name` ebong `departments.name`. Ek namer 2 ta department khola jabe na.
- **Indexes:** Fast search er jonno string column e index kora hoyese.

---

## SECTION 17: Seeders

- **Seeder File:** `database/seeders/DatabaseSeeder.php`
- **Dummy Data:** Ekhane "Acme Corporation", "Alice Johnson" (Employee) ityadi dummy corporate data lekha ase.
- **Re-run:** Terminal e `php artisan db:seed` dilei Oracle table e ei data gulo dhuke jabe jodi already na thake. Eta production safe.

---

## SECTION 18: Website Mapping

| Website Page | Route Name | Controller | Model | Oracle Table | Blade File | SQL Object Used |
|---|---|---|---|---|---|---|
| Public Home | `home` | `PageController` | N/A | N/A | `welcome.blade.php` | N/A |
| Admin Dashboard | `admin.dashboard`| `DashboardController`| `Project, Employee` | multiple | `admin/dashboard.blade.php`| N/A |
| Projects List | `admin.projects.index`| `ProjectController` | `Project` | `projects` | `admin/projects/index.blade.php`| N/A |
| Update Project | `admin.projects.update`| `ProjectController` | `Project` | `projects` | N/A | Stored Procedure: `MARK_PROJECT_COMPLETED` |
| Delete Project | `admin.projects.destroy`| `ProjectController` | `Project` | `projects` | N/A | Trigger: `TRG_PREVENT_ACTIVE_PROJ_DEL` |
| Employees List | `admin.employees.index`| `EmployeeController`| `Employee` | `employees` | `admin/employees/index.blade.php`| N/A |
| Add Employee | `admin.employees.store`| `EmployeeController`| `Employee` | `employees` | N/A | Trigger: `TRG_CAPITALIZE_EMP_NAME` |

---

## SECTION 19: Possible Viva Questions

1. **Tomader project e kon database use kora hoyese?** Oracle 11g XE.
2. **Oracle keno use kora holo MySQL theke?** University requirement ebong Oracle er PL/SQL (Trigger, Procedure) features onk powerful tai.
3. **Laravel kibhabe Oracle er sathe connect hoy?** `yajra/laravel-pdo-via-oci8` package er maddhome OCI8 driver diye.
4. **OCI8 ki?** Eta PHP er extension jeta Oracle database e query execute korte shajjo kore.
5. **Laravel e model er kaj ki?** Eloquent ORM use kore database table er sathe object-oriented way te interact kora.
6. **$fillable property keno use kora hoy?** Mass assignment vulnerabilities theke bashate, user jate shob column alter korte na pare.
7. **Controller er kaj ki?** Route theke request niye Model theke data tule View te pathano (Business Logic).
8. **View e ki thake?** Blade files (HTML/CSS) ja user browser e dekhe.
9. **Routing kothay thake?** `routes/web.php` e.
10. **Migration ki?** Database schema version control. PHP code diye table toiri kora ebong drop kora.
11. **Seeder er kaj ki?** Dummy ba initial data die database table auto-fill kora.
12. **Middleware ki?** Request ebong Response er majhkhaner ekta security layer (e.g. ActivityMiddleware, AdminMiddleware).
13. **Validation kothay kora hoyese?** Controller e `$request->validate()` method diye.
14. **Pagination ki ebong kivabe kora hoy?** Ekbare shob data na niye chunk hishebe data ana. Laravel e `paginate(10)` diye kora hoyese.
15. **SQL Injection theke kivabe safe project?** Eloquent ORM by default PDO parameter binding use kore, tai SQL injection impossible.
16. **Session ki kaj kore?** User login thakar state dhore rakhe ebong success flash messages show kore.
17. **Cookie kivabe use kora hoyese?** `Cookie::queue` diye public home page e 'first_visit_time' track kora hoyese.
18. **Transaction (DB::transaction) keno dorkar?** Database e kono choto step fail korle jate purota cancel (Rollback) hoy, noile half data nosto hobe.
19. **Primary Key ki?** Table er unique identifier (e.g. id).
20. **Foreign Key ki?** Onno table er primary key ja ekhane refer kora hoy. (e.g. project er client column clients table theke ashe).
21. **ON DELETE SET NULL mane ki?** Client delete korle project delete hobe na, shudhu client er namta Null hoye jabe.
22. **Unique constraint keno lage?** Ek namer 2 ta department jate khola na jay.
23. **Index er kaj ki database e?** Table theke query/search khub fast anar jonno.
24. **Stored Procedure ki?** Oracle e compile kora SQL function ja direct database server e execute hoy.
25. **Tomra ki procedure koreso?** `MARK_PROJECT_COMPLETED`.
26. **Function ebong Procedure er difference ki?** Function exactly ekta value return kore, procedure normally return kore na, action kore.
27. **Tomader Trigger ki?** `TRG_PREVENT_ACTIVE_PROJ_DEL` ja In Progress project delete hote badha dey.
28. **Trigger kokhon call hoy?** Event based (BEFORE DELETE, AFTER INSERT). Eke manually call deya lage na.
29. **Cursor ki?** Table theke row by row data loop kore ana PL/SQL block.
30. **Tomra Cursor kivabe koreso?** `CURSOR_BULK_UPDATE_SALARY` toiri koresi.
31. **View ki?** SQL select query ke ekta table er moto virtual kore rakha. (VW_ACTIVE_DASHBOARD_STATS).
32. **Sequence ki?** Oracle e MySQL er moto auto_increment nei, tai ID baranor jonno Sequence lage.
33. **DB_CONNECTION=.env te ki thake?** connection name 'oracle'.
34. **Laravel er config kothay?** config/database.php.
35. **HasMany relation ki?** Ekta client er onek project thakte pare.
36. **BelongsTo relation ki?** Ekta project ekta client er odhine (belongs) thake.
37. **@foreach ki?** Blade file e loop ghurano.
38. **Laravel artisan ki?** Command line tool ja cache clear, migrate, serve ityadi kaj kore.
39. **php artisan serve ki kore?** PHP er built in local server start kore.
40. **Git ki?** Version control system ja code er history rakhe.
41. **REST API ba resource route ki?** Controller e default 7 ta standard CRUD method (index, create, store, show, edit, update, destroy) thake.
42. **HTTP 500 mane ki?** Internal Server Error (Amader OCI8 problem cilo).
43. **Error handiling kothay koreso?** bootstrap/app.php te custom Exception dhora hoyese.
44. **Flash message ki?** Ekbar page reload dile jeta dekhanor por expire hoye jay.
45. **CSRF Token ki?** Cross Site Request Forgery theke bachar security. Form e @csrf add kora ase.
46. **Route kothay define kore?** routes/web.php.
47. **Tinker ki?** Laravel er REPL (command line) e PHP run korar tool.
48. **File upload keno koro ni?** Karon existing database e kono image/blob column nei.
49. **TNS ki?** Transparent Network Substrate (Oracle er network layer).
50. **Tomader project ready for production?** Haa, completely ready.

---

## SECTION 20: Demo Checklist (15-20 Minutes)

1. **Start Server:** Terminal e `php artisan serve` likhe server on koro.
2. **Browser Open:** `http://127.0.0.1:8000/admin/projects` e login koro.
3. **Show CRUD:** "Add New Project" e click kore form puron kore save dao. Validate message asbe, eta show koro. (Web Programming MVC test).
4. **Show Pagination:** List er niche `links()` dekhaw.
5. **Show Search:** Ekta project search box e likhe filter koro.
6. **Open VS Code:** `routes/web.php` open koro. Routing dekhaw.
7. **Open Controller:** `app/Http/Controllers/Admin/ProjectController.php` open koro. Ekhane Pagination ebong DB::transaction() dekhaw.
8. **Open Model:** `app/Models/Project.php` open koro. `belongsTo` relation dekhaw.
9. **Show Trigger:** Abar browser e jao. Emon ekta project Delete e chap dao jar status "In Progress". Error asbe. Ekhon VS Code e `database/oracle/triggers.sql` file open koro ebong `TRG_PREVENT_ACTIVE_PROJ_DEL` code ta examiner ke dekhaw. Bolo je "Sir, Oracle directly block kore dicche."
10. **Show Procedure:** Browser e ekta In Progress project Edit koro. Status change kore "Completed" kore save dao. Ekhon ProjectController er `update()` method e jao, dekhaw kivabe `MARK_PROJECT_COMPLETED` procedure ke PHP call korse.
11. **Show Constraints:** VS Code e migration `database/migrations/2026_07_18_080915_add_oracle_constraints_and_indexes.php` open koro. Ekhane Unique key, Foreign Key, ebong Index gulo examiner ke explain koro.
12. **End:** Examiner ke balo: "Sir, ei project MVC follow kore toiri kora, OCI8 diye secured, ebong shob PL/SQL logic directly Laravel execute korche."
