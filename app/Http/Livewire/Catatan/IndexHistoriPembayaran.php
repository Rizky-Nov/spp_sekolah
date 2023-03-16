<?php

namespace App\Http\Livewire\Catatan;

use App\Models\PembayaranSpp;
use Livewire\Component;

class IndexHistoriPembayaran extends Component
{
    public function render()
    {
        return view('livewire.catatan.index-histori-pembayaran', [
            'historis' => PembayaranSpp::orderByDesc('id')->get(),
        ]);
    }
}
