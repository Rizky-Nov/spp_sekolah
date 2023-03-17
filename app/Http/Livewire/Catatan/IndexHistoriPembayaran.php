<?php

namespace App\Http\Livewire\Catatan;

use App\Models\PembayaranSpp;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndexHistoriPembayaran extends Component
{
    public function render()
    {
        // $cek = PembayaranSpp::where('id', Auth::guard('siswa')->user());
        // dd($cek);
        return view('livewire.catatan.index-histori-pembayaran', [
            'historis' => PembayaranSpp::orderByDesc('id')->get(),
            // 'siswahistori' => $cek->get(),
        ]);

    }
}
