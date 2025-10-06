<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        // Create 10 fake students
        Student::factory()->count(10)->create();

        // Optional: add a manual record
        Student::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'branch' => 'CSE',
            'phone' => '9876543210',
        ]);
    }
}
