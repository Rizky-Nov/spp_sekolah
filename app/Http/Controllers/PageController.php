<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function Dashboard()
    {
        if (Auth::guard('siswa')->check()) {
            return view('siswa.dasboard');
        } else {
            if (Auth::guard('petugas')->user()) {
                return view('admin.dashboard');
            }
        }
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

    public function Pembayaran()
    {
        return view('admin.pembayaran-spp');
    }

    public function Histori()
    {
        return view('admin.histori-pembayaran');
    }

    public function CetakLaporan()
    {
        return view('admin.cetak-laporan-pembayaran');
    }

}
