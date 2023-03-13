<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Dashboard()
    {
        return view('admin.dashboard');
    }

    public function DataSiswa()
    {
        return view('admin.data-siswa');
    }

    public function DataPetugas()
    {
        $datapetugas = Petugas::orderByDesc('id');

        return view('admin.data-petugas', [
            'datapetugases' => $datapetugas->get(),
        ]);
    }

    public function DataSpp()
    {
        return view('admin.data-spp');
    }

    public function DataKelas()
    {
        return view('admin.data-kelas');
    }
}
