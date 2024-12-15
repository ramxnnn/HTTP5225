<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Course;
use App\Models\Faculty;  
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Course::factory()->create([
            'course_name' => 'php',
            'course_code' => 'HTTP2233',
            'description' => 'php is a backend language',
            'faculty_id' => '1',
        ]);

        Course::factory()->create([
            'course_name' => 'Web development',
            'course_code' => 'HTTP1233',
            'description' => 'It is workshop',
            'faculty_id' => '2',
        ]);

        Course::factory()->create([
            'course_name' => 'ASP.net',
            'course_code' => 'HTTP2133',
            'description' => '.net is a backend language',
            'faculty_id' => '3',
        ]);

        Faculty::factory()->create([
            'name' => 'Gary',
        ]);

        Faculty::factory()->create([
            'name' => 'Seon',
        ]);

        Faculty::factory()->create([
            'name' => 'Brittle',
        ]);

    }
}