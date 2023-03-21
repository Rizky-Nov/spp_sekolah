<?php

namespace App\Http\Livewire\Catatan;

use App\Models\PembayaranSpp;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndexHistoriPembayaran extends Component
{
    public function render()
    {
        return view('livewire.catatan.index-histori-pembayaran', [
            'historis' => PembayaranSpp::orderBy('id', 'asc')->get(),
        ]);

    }
}
