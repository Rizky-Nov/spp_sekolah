<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\Level;
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

        // Kelas::create([
        //     'nama_kelas' => 'RPL-A',
        //     'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
        // ]);

        // Kelas::create([
        //     'nama_kelas' => 'RPL-C',
        //     'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
        // ]);
        
        // Kelas::create([
        //     'nama_kelas' => 'RPL-B',
        //     'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
        // ]);

        Spp::create([
            'tahun' => '2021',
            'nominal' => '210.000',
        ]);

        Spp::create([
            'tahun' => '2022',
            'nominal' => '220.000',
        ]);

        Level::create([
            'level' => 'admin',
        ]);

        Level::create([
            'level' => 'petugas',
        ]);
    }
}
