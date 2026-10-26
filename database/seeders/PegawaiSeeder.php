<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Models\UnitKerja;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    public function run(): void
    {
        if (Pegawai::query()->exists()) {
            $this->command->info('Data pegawai sudah ada, dilewati.');
            return;
        }

        $jabatanIds = Jabatan::query()->pluck('id_jabatan')->all();
        $unitKerjaIds = UnitKerja::query()->pluck('id_unit_kerja')->all();

        if (empty($jabatanIds) || empty($unitKerjaIds)) {
            $this->command->error(
                'Data jabatan atau unit kerja belum tersedia.'
            );
            return;
        }

        Pegawai::factory()
            ->count(10)
            ->state(fn (): array => [
                'id_jabatan' => fake()->randomElement($jabatanIds),
                'id_unit_kerja' => fake()->randomElement($unitKerjaIds),
            ])
            ->create();

        $this->command->info('10 data pegawai berhasil dibuat.');
    }
}
