<?php

namespace Database\Seeders;

use App\Models\Task;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 users
        User::factory(10)->create();

        // Specific user
        User::factory()->create([
            'name' => 'Joem',
            'email' => 'joem@example.com',
            'password' => bcrypt('Joem102509@'),
            'email_verified_at' => now(),
        ]);

        // Create 30 projects, each with 30 tasks
        Project::factory(30)
            ->hasTasks(30)
            ->create();
    }
}
