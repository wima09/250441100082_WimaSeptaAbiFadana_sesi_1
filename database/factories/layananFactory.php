<?php

namespace Database\Factories;

use App\Models\layanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<layanan>
 */
class layananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode layanan' => strtoupper(fake()->unique()->numerify('layanan-###')),
            'nama_layanan' => fake()->name(),
            'jenis' => fake() -> wordwrap()
        ];
    }
}
