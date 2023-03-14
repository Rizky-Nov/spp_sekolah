<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        Spp::create([
            'tahun' => '2021',
            'nominal' => '210.000',
        ]);

        Spp::create([
            'tahun' => '2022',
            'nominal' => '220.000',
        ]);

        Kelas::create([
            'nama_kelas' => 'RPL',
            'kompetensi_keahlian' => 'Rekayasa',
        ]);

        Level::create([
            'level' => 'admin',
        ]);

        Level::create([
            'level' => 'petugas',
        ]);

        Petugas::create([
            'level_id' => 1,
            'username' => '123',
            'password' => bcrypt('123'),
            'nama_petugas' => 'admin',
        ]);

        Petugas::create([
            'level_id' => 2,
            'username' => '1234',
            'password' => bcrypt('1234'),
            'nama_petugas' => 'petugas',
        ]);

        Siswa::create([
            'spp_id' => 1,
            'kelas_id' => 1,
            'nisn' => '123123123',
            'nis' => '12345',
            'nama' => 'Siswa',
            'alamat' => 'Cimahi',
            'no_telp' => '012312312',
            'password' => bcrypt('12345'),
        ]);
    }
}
