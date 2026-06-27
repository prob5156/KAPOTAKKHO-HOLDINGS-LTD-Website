<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Check if data already exists to avoid overwriting production data
        if (\App\Models\Client::count() === 0) {
            \App\Models\Client::create([
                'company_name' => 'Acme Corporation',
                'contact_person' => 'John Doe',
                'email' => 'john.doe@acmecorp.com',
                'phone' => '555-0100',
                'address' => '123 Acme Way',
                'status' => 'Active',
            ]);
        }

        if (\App\Models\Department::count() === 0) {
            \App\Models\Department::create([
                'name' => 'Engineering',
                'code' => 'ENG',
                'description' => 'Software Engineering Department',
                'manager' => 'Jane Smith',
                'status' => 'Active',
            ]);
        }

        if (\App\Models\Project::count() === 0) {
            \App\Models\Project::create([
                'name' => 'Acme Website Revamp',
                'client' => 'Acme Corporation',
                'description' => 'Redesign and rebuild the Acme corporate website.',
                'start_date' => now(),
                'status' => 'In Progress',
            ]);
        }

        if (\App\Models\Employee::count() === 0) {
            \App\Models\Employee::create([
                'name' => 'Alice Johnson',
                'email' => 'alice@kapotakkho.local',
                'phone' => '555-0200',
                'department' => 'Engineering',
                'position' => 'Senior Developer',
                'join_date' => now()->subYears(2),
                'status' => 'Active',
            ]);
        }

        if (\App\Models\Job::count() === 0) {
            \App\Models\Job::create([
                'title' => 'Frontend Developer',
                'department' => 'Engineering',
                'location' => 'Remote',
                'type' => 'Full-time',
                'description' => 'Looking for an experienced frontend developer.',
                'status' => 'Open',
            ]);
        }
        
        if (\App\Models\News::count() === 0) {
            \App\Models\News::create([
                'title' => 'KAPOTAKKHO Holdings Expands Engineering Team',
                'slug' => 'kapotakkho-holdings-expands-engineering-team',
                'content' => 'We are excited to announce our newest team members...',
                'category' => 'News',
                'status' => 'Published',
                'published_date' => now(),
            ]);
        }

        // Create a default admin user if none exists
        if (User::count() === 0) {
            User::create([
                'name' => 'Admin User',
                'email' => 'admin@kapotakkho.local',
                'password' => bcrypt('password'),
            ]);
        }
    }
}
