<?php

namespace Database\Factories;

use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pegawai>
 */
class PegawaiFactory extends Factory
{
    protected $model = Pegawai::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nip' => fake()->unique()->numerify('####################'),
            'nama_lengkap' => fake()->name(),
            'nik' => fake()->unique()->numerify('################'),
            'id_unit_kerja' => null,
            'id_jabatan' => Jabatan::factory(),
            'status_kepegawaian' => fake()->randomElement(['Tetap', 'Kontrak', 'Honorer']),
            'tanggal_masuk' => fake()->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),
            'nomor_str_sip' => fake()->bothify('STR-##########'),
            'tgl_exp_str_sip' => fake()->dateTimeBetween('now', '+5 years')->format('Y-m-d'),
            'nomor_rekening' => fake()->numerify('################'),
        ];
    }
}
