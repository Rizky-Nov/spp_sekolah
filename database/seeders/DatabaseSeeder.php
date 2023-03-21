<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bulan;
use App\Models\Kelas;
use App\Models\Level;
use App\Models\Petugas;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Bulan::create([
            'bulan' => 'Januari'
        ]);
        Bulan::create([
            'bulan' => 'Febuari'
        ]);
        Bulan::create([
            'bulan' => 'Maret'
        ]);
        Bulan::create([
            'bulan' => 'April'
        ]);
        Bulan::create([
            'bulan' => 'Mei'
        ]);
        Bulan::create([
            'bulan' => 'Juni'
        ]);
        Bulan::create([
            'bulan' => 'Juli'
        ]);
        Bulan::create([
            'bulan' => 'Agustus'
        ]);
        Bulan::create([
            'bulan' => 'September'
        ]);
        Bulan::create([
            'bulan' => 'Oktober'
        ]);
        Bulan::create([
            'bulan' => 'November'
        ]);
        Bulan::create([
            'bulan' => 'Desember'
        ]);

        Spp::create([
            'tahun' => '2020',
            'nominal' => '210000',
        ]);

        // Spp::create([
        //     'tahun' => '2022',
        //     'nominal' => '220000',
        // ]);

        Kelas::create([
            'nama_kelas' => 'XII',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
        ]);

        Level::create([
            'level' => 'admin',
        ]);

        Level::create([
            'level' => 'petugas',
        ]);

        Petugas::create([
            'level_id' => 1,
            'username' => 'admin',
            'password' => bcrypt('123'),
            'nama_petugas' => 'admin',
        ]);

        Petugas::create([
            'level_id' => 2,
            'username' => 'petugas',
            'password' => bcrypt('123'),
            'nama_petugas' => 'petugas',
        ]);

        Siswa::create([
            'spp_id' => 1,
            'kelas_id' => 1,
            'nisn' => '1000201002',
            'nis' => '12345',
            'nama' => 'Fauzi Rizky Noviwidiyanto',
            'alamat' => 'Cimahi',
            'no_telp' => '012312312',
            'password' => bcrypt('12345'),
        ]);

        Siswa::create([
            'spp_id' => 1,
            'kelas_id' => 1,
            'nisn' => '100002010023',
            'nis' => '12345',
            'nama' => 'Gilang Ragil Santoso',
            'alamat' => 'Cimahi',
            'no_telp' => '012312312',
            'password' => bcrypt('12345'),
        ]);
    }
}
