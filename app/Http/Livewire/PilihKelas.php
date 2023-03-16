<?php

namespace App\Http\Livewire;

use App\Models\Kelas;
use Livewire\Component;

class PilihKelas extends Component
{
    public $kelas_id;
    public $namakelas;
    public $jurusan;

    public function render()
    {
        return view('livewire.pilih-kelas', [
            'datakelases' => Kelas::all(),
        ]);
    }

    public function setKelas($id)
    {
        $kelas = Kelas::find($id);

        $this->kelas_id = $kelas->id;
        $this->namakelas = $kelas->nama_kelas;
        $this->jurusan = $kelas->kompetensi_keahlian;
    }
}
