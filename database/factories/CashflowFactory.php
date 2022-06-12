<?php

namespace Database\Factories;

use App\Models\cashflow;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cashflow>
 */
class CashflowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'uraian' => $this->faker->sentence(2),
            'saldoKeluar' => $this->faker->randomDigit().'000',
            'saldoMasuk' => $this->faker->randomDigit().'000',
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
