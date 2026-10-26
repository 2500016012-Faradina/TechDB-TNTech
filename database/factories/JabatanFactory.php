<?php

namespace Database\Factories;

use App\Models\Jabatan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Jabatan>
 */
class JabatanFactory extends Factory
{
    protected $model = Jabatan::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_jabatan' => fake()->unique()->numerify('JBT######'),
            'nama_jabatan' => fake()->randomElement([
                'Dokter',
                'Perawat',
                'Apoteker',
                'Analis Laboratorium',
                'Staf Administrasi',
            ]),
            'gaji_pokok' => fake()->numberBetween(3_000_000, 15_000_000),
        ];
    }
}
