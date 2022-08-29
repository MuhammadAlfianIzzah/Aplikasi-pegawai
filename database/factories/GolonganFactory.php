<?php

namespace Database\Factories;

use App\Models\Golongan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Golongan>
 */
class GolonganFactory extends Factory
{
    protected $model = Golongan::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "kode" => fake()->unique()->randomDigit,
            'nama' => fake()->name(),
        ];
    }
}
