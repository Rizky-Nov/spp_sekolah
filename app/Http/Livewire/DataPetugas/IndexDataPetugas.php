<?php

namespace App\Http\Livewire\DataPetugas;

use App\Models\Petugas;
use Livewire\Component;

class IndexDataPetugas extends Component
{
    public function render()
    {
        $datapetugas = Petugas::orderByDesc('nama_petugas');

        return view('livewire.data-petugas.index-data-petugas', [
            'datapetugases' => $datapetugas->get(),
        ]);
    }

    public function getPetugas($id)
    {
        $this->emit('getPetugas', $id);
    }
}
