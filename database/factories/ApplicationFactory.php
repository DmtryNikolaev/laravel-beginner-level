<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'mail' => $this->faker->email(),
            'additional_information' => $this->faker->text(),
            'clientID' => $this->faker->numberBetween(),
            'utm_source' => $this->faker->numberBetween(),
            'utm_medium' => $this->faker->numberBetween(),
            'utm_campaign' => $this->faker->numberBetween(),
            'utm_content' => $this->faker->numberBetween(),
            'utm_term' => $this->faker->numberBetween(),
            'source' => $this->faker->numberBetween(),
        ];
    }
}