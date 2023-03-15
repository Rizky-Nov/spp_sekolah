<?php

namespace App\Http\Livewire\DataKelas;

use App\Models\Kelas;
use Livewire\Component;

class CreateDataKelas extends Component
{
    public $namakelas;
    public $jurusan;

    public function render()
    {
        return view('livewire.data-kelas.create-data-kelas');
    }

    public function store()
    {
        Kelas::create([
            'nama_kelas' => $this->namakelas,
            'kompetensi_keahlian' => $this->jurusan,
        ]);
    }
}
