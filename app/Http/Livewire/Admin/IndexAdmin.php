<?php

namespace App\Http\Livewire\Admin;

use App\Models\PembayaranSpp;
use App\Models\Petugas;
use App\Models\Siswa;
use Livewire\Component;

class IndexAdmin extends Component
{
    public function render()
    {
        return view('livewire.admin.index-admin', [
            'jmlSiswas' => Siswa::count(),
            'jmlPetugas' => Petugas::count(),
            'jmlPembayaran' => PembayaranSpp::count(),
        ]);
    }
}
