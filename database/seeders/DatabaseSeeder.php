<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
use App\Models\Department;
use App\Models\Project;
use App\Models\Employee;
use App\Models\Job;
use App\Models\News;
use App\Models\Contact;
use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // 1. Clients
        if (Client::count() < 4) {
            $clients = [
                ['company_name' => 'Acme Corporation', 'contact_person' => 'John Doe', 'email' => 'john@acme.com', 'phone' => '555-0100', 'address' => '123 Acme Way', 'status' => 'Active'],
                ['company_name' => 'Globex Inc', 'contact_person' => 'Jane Smith', 'email' => 'jane@globex.com', 'phone' => '555-0101', 'address' => '456 Globex Blvd', 'status' => 'Active'],
                ['company_name' => 'Initech', 'contact_person' => 'Bill Lumbergh', 'email' => 'bill@initech.com', 'phone' => '555-0102', 'address' => '789 Initech Pkwy', 'status' => 'Active'],
                ['company_name' => 'Umbrella Corp', 'contact_person' => 'Albert Wesker', 'email' => 'albert@umbrella.com', 'phone' => '555-0103', 'address' => '321 Raccoon City', 'status' => 'Inactive'],
            ];
            foreach ($clients as $c) Client::create($c);
        }

        // 2. Departments
        if (Department::count() < 4) {
            $deps = [
                ['name' => 'Engineering', 'code' => 'ENG', 'description' => 'Software Engineering', 'manager' => 'Alice', 'status' => 'Active'],
                ['name' => 'Human Resources', 'code' => 'HR', 'description' => 'HR and Payroll', 'manager' => 'Bob', 'status' => 'Active'],
                ['name' => 'Marketing', 'code' => 'MKT', 'description' => 'Marketing & Sales', 'manager' => 'Charlie', 'status' => 'Active'],
                ['name' => 'Finance', 'code' => 'FIN', 'description' => 'Finance and Accounting', 'manager' => 'David', 'status' => 'Active'],
            ];
            foreach ($deps as $d) Department::create($d);
        }

        // 3. Projects
        if (Project::count() < 4) {
            $projs = [
                ['name' => 'Acme Web Revamp', 'client' => 'Acme Corporation', 'description' => 'Redesign Acme website.', 'start_date' => now(), 'status' => 'In Progress'],
                ['name' => 'Globex ERP', 'client' => 'Globex Inc', 'description' => 'ERP implementation.', 'start_date' => now()->subDays(10), 'status' => 'Completed'],
                ['name' => 'Initech Migration', 'client' => 'Initech', 'description' => 'Cloud migration.', 'start_date' => now()->addDays(5), 'status' => 'Planned'],
                ['name' => 'Umbrella Security', 'client' => 'Umbrella Corp', 'description' => 'Security audit.', 'start_date' => now(), 'status' => 'In Progress'],
            ];
            foreach ($projs as $p) Project::create($p);
        }

        // 4. Employees
        if (Employee::count() < 4) {
            $emps = [
                ['name' => 'Alice Johnson', 'email' => 'alice@test.com', 'phone' => '555-0200', 'department' => 'Engineering', 'position' => 'Senior Dev', 'join_date' => now()->subYears(2), 'status' => 'Active'],
                ['name' => 'Bob Smith', 'email' => 'bob@test.com', 'phone' => '555-0201', 'department' => 'HR', 'position' => 'HR Manager', 'join_date' => now()->subYears(1), 'status' => 'Active'],
                ['name' => 'Charlie Brown', 'email' => 'charlie@test.com', 'phone' => '555-0202', 'department' => 'Marketing', 'position' => 'SEO Expert', 'join_date' => now()->subMonths(6), 'status' => 'Active'],
                ['name' => 'David Lee', 'email' => 'david@test.com', 'phone' => '555-0203', 'department' => 'Finance', 'position' => 'Accountant', 'join_date' => now()->subMonths(2), 'status' => 'On Leave'],
            ];
            foreach ($emps as $e) Employee::create($e);
        }

        // 5. Jobs
        if (Job::count() < 4) {
            $jobs = [
                ['title' => 'Frontend Developer', 'department' => 'Engineering', 'location' => 'Remote', 'type' => 'Full-time', 'description' => 'React expert needed.', 'status' => 'Open'],
                ['title' => 'Backend Developer', 'department' => 'Engineering', 'location' => 'On-site', 'type' => 'Full-time', 'description' => 'Laravel expert needed.', 'status' => 'Open'],
                ['title' => 'HR Assistant', 'department' => 'HR', 'location' => 'On-site', 'type' => 'Part-time', 'description' => 'Assist in recruitment.', 'status' => 'Closed'],
                ['title' => 'Marketing Lead', 'department' => 'Marketing', 'location' => 'Hybrid', 'type' => 'Full-time', 'description' => 'Lead the marketing team.', 'status' => 'Open'],
            ];
            foreach ($jobs as $j) Job::create($j);
        }

        // 6. News
        if (News::count() < 4) {
            $news = [
                ['title' => 'Company Expands', 'slug' => 'company-expands', 'content' => 'We are expanding to new regions.', 'category' => 'News', 'status' => 'Published', 'published_date' => now()],
                ['title' => 'New Product Launch', 'slug' => 'new-product-launch', 'content' => 'We launched a new product today.', 'category' => 'Announcements', 'status' => 'Published', 'published_date' => now()->subDays(2)],
                ['title' => 'Q3 Results', 'slug' => 'q3-results', 'content' => 'Our Q3 results are outstanding.', 'category' => 'Financials', 'status' => 'Draft', 'published_date' => null],
                ['title' => 'Award Received', 'slug' => 'award-received', 'content' => 'We won the best startup award.', 'category' => 'News', 'status' => 'Published', 'published_date' => now()->subDays(10)],
            ];
            foreach ($news as $n) News::create($n);
        }

        // 7. Contacts
        if (Contact::count() < 4) {
            $contacts = [
                ['name' => 'Eve', 'email' => 'eve@test.com', 'subject' => 'Support', 'message' => 'Need help with login.', 'status' => 'Unread'],
                ['name' => 'Frank', 'email' => 'frank@test.com', 'subject' => 'Sales', 'message' => 'I want to buy bulk.', 'status' => 'Read'],
                ['name' => 'Grace', 'email' => 'grace@test.com', 'subject' => 'Feedback', 'message' => 'Great website!', 'status' => 'Replied'],
                ['name' => 'Hank', 'email' => 'hank@test.com', 'subject' => 'Partnership', 'message' => 'Let us partner up.', 'status' => 'Unread'],
            ];
            foreach ($contacts as $c) Contact::create($c);
        }

        // 8. Faqs
        if (Faq::count() < 4) {
            $faqs = [
                ['question' => 'How to apply?', 'answer' => 'Go to the careers page.', 'category' => 'Careers', 'status' => 'Active', 'display_order' => 1],
                ['question' => 'Where are you located?', 'answer' => 'We are remote.', 'category' => 'General', 'status' => 'Active', 'display_order' => 2],
                ['question' => 'What is your working hours?', 'answer' => '9 AM to 5 PM.', 'category' => 'General', 'status' => 'Active', 'display_order' => 3],
                ['question' => 'Do you offer refunds?', 'answer' => 'No refunds available.', 'category' => 'Billing', 'status' => 'Inactive', 'display_order' => 4],
            ];
            foreach ($faqs as $f) Faq::create($f);
        }

        // 9. Users
        if (User::count() < 4) {
            $users = [
                ['name' => 'Admin User', 'email' => 'admin@kapotakkho.local', 'password' => bcrypt('password')],
                ['name' => 'Manager User', 'email' => 'manager@kapotakkho.local', 'password' => bcrypt('password')],
                ['name' => 'Editor User', 'email' => 'editor@kapotakkho.local', 'password' => bcrypt('password')],
                ['name' => 'Guest User', 'email' => 'guest@kapotakkho.local', 'password' => bcrypt('password')],
            ];
            foreach ($users as $u) {
                if(!User::where('email', $u['email'])->exists()) {
                    User::create($u);
                }
            }
        }
    }
}
