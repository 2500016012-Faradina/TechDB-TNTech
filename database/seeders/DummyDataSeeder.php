<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyDataSeeder extends Seeder
{
    public function run(): void
    {
        $target = 100000;
        $jumlahSekarang = DB::table('presensi')->count();
        $kekurangan = $target - $jumlahSekarang;

        if ($kekurangan <= 0) {
            $this->command->info(
                'Data presensi sudah mencapai 100.000. Tidak ada data tambahan.'
            );
            return;
        }

        $pegawai = DB::table('pegawai')->pluck('nip')->all();

        if (empty($pegawai)) {
            $this->command->error('Data pegawai belum tersedia.');
            return;
        }

        $id = (int) DB::table('presensi')->max('id_presensi') + 1;
        $tanggalAwal = strtotime('2026-01-01');
        $batch = [];

        for ($i = 0; $i < $kekurangan; $i++) {
            $batch[] = [
                'id_presensi' => $id + $i,
                'nip' => $pegawai[$i % count($pegawai)],
                'tanggal' => date(
                    'Y-m-d',
                    strtotime('+' . intdiv($jumlahSekarang + $i, count($pegawai)) . ' days', $tanggalAwal)
                ),
                'jam_masuk' => '08:00:00',
                'jam_keluar' => '16:00:00',
                'status' => 'Hadir',
            ];

            if (count($batch) >= 1000) {
                DB::table('presensi')->insert($batch);
                $batch = [];
            }
        }

        if (!empty($batch)) {
            DB::table('presensi')->insert($batch);
        }

        $this->command->info('Data presensi berhasil dilengkapi.');
    }
}
