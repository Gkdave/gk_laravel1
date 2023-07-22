<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'emp_id' => $this->faker->numberBetween(112, 301),
            'name' => $this->faker->unique()->name($maxNbChars = 8),
            'excerpt' => $this->faker->realText($maxNbChars = 20),
            'dob' => $this->faker->dateTimeBetween('1958-01-11', '2001-02-21'),
            // 'post' => $this->faker->name($maxNbChars = 5),
            'post' =>$this->faker->randomElement(['a'=>'Engineer','b'=>'teacher','c'=>'technician']),
            'sallary' => $this->faker->numberBetween(20000, 60000),
            'address' => $this->faker->name($maxNbChars = 10),
            'min_to_read' => $this->faker->numberBetween(1, 10),
            'image_path' => $this->faker->imageUrl(640, 480),
            'is_published' => 1
        ];
    }
}