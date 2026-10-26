<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Seed the Jabatan table.
     */
    public function run(): void
    {
        $jabatan = [
            ['id_jabatan' => 'JBT001', 'nama_jabatan' => 'Direktur', 'gaji_pokok' => 15_000_000],
            ['id_jabatan' => 'JBT002', 'nama_jabatan' => 'Dokter', 'gaji_pokok' => 10_000_000],
            ['id_jabatan' => 'JBT003', 'nama_jabatan' => 'Perawat', 'gaji_pokok' => 5_000_000],
            ['id_jabatan' => 'JBT004', 'nama_jabatan' => 'Apoteker', 'gaji_pokok' => 6_000_000],
            ['id_jabatan' => 'JBT005', 'nama_jabatan' => 'Staf Administrasi', 'gaji_pokok' => 4_000_000],
        ];

        foreach ($jabatan as $data) {
            if (! Jabatan::query()->where('id_jabatan', $data['id_jabatan'])->exists()) {
                Jabatan::factory()->create($data);
            }
        }
    }
}
