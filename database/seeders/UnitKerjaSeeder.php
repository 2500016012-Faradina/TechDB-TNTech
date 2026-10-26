<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitKerjaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['id_unit_kerja' => 'UK001', 'nama_unit' => 'Administrasi', 'maksimal_cuti' => 12],
            ['id_unit_kerja' => 'UK002', 'nama_unit' => 'Pelayanan Medis', 'maksimal_cuti' => 12],
            ['id_unit_kerja' => 'UK003', 'nama_unit' => 'Keperawatan', 'maksimal_cuti' => 12],
            ['id_unit_kerja' => 'UK004', 'nama_unit' => 'Farmasi', 'maksimal_cuti' => 12],
            ['id_unit_kerja' => 'UK005', 'nama_unit' => 'Laboratorium', 'maksimal_cuti' => 12],
        ];

        foreach ($data as $unit) {
            DB::table('unit_kerja')->updateOrInsert(
                ['id_unit_kerja' => $unit['id_unit_kerja']],
                $unit
            );
        }

        $this->command->info('Data unit kerja berhasil diperiksa.');
    }
}
