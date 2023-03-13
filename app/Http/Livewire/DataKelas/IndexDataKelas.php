<?php

namespace App\Http\Livewire\DataKelas;

use App\Models\Kelas;
use Livewire\Component;

class IndexDataKelas extends Component
{
    public function render()
    {
        $datakelas = Kelas::orderByDesc('kompetensi_keahlian');

        return view('livewire.data-kelas.index-data-kelas', [
            'datakelases' => $datakelas->get(),
        ]);
    }

    public function getKelas($id)
    {
        $this->emit('getKelas', $id);
    }
}
