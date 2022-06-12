<?php

namespace Database\Factories;

use App\Models\warga;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Warga>
 */
class WargaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'nik' => $this->faker->nik(),
            'sex' => $this->faker->randomElement(['L', 'P']),
            'bday' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'age' => $this->faker->numberBetween(15,60),
            'alamat' => $this->faker->address,
            'phone' => $this->faker->numerify('###-###-####'),
        ];
    }
}
