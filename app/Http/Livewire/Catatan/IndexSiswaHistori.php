<?php

namespace App\Http\Livewire\Catatan;

use App\Models\PembayaranSpp;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndexSiswaHistori extends Component
{

    public function render()
    {
        $siswaHistori = PembayaranSpp::where('siswa_id', Auth::guard('siswa')->user()->id);
        
        return view('livewire.catatan.index-siswa-histori', [
            'SiswaHistori' => $siswaHistori->get(),
        ]);
    }
}
