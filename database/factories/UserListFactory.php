<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserList>
 */
class UserListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'FIO'=>$this->faker->userName(),
            'email'=>$this->faker->email(),
            'number'=>$this->faker->e164PhoneNumber(),
            'age'=>$this->faker->numberBetween(15,30),
            'created_at'=>$this->faker->dateTime(),
            'updated_at'=>$this->faker->dateTime()
        ];
    }
}
