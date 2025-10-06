<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'name'   => $this->faker->name(),
            'email'  => $this->faker->unique()->safeEmail(),
            'branch' => $this->faker->randomElement(['CSE', 'ECE', 'EEE', 'MECH']),
            'phone'  => $this->faker->numerify('##########'), // 10-digit phone number
        ];
    }
}
