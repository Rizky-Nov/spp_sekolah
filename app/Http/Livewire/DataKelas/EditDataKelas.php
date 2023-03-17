<?php

namespace App\Http\Livewire\DataKelas;

use App\Models\Kelas;
use App\Traits\ListenerTrait;
use Livewire\Component;

class EditDataKelas extends Component
{
    use ListenerTrait;

    public $kelas_id;
    public $namakelas;
    public $jurusan;

    public function render()
    {
        return view('livewire.data-kelas.edit-data-kelas');
    }

    protected $listeners = [
        'getKelas'
    ];

    public function getKelas($id)
    {
        $kelas = Kelas::find($id);

        $this->kelas_id = $kelas->id;
        $this->namakelas = $kelas->nama_kelas;
        $this->jurusan = $kelas->kompetensi_keahlian;
    }

    public function update()
    {
        $kelas = Kelas::find($this->kelas_id);

        $kelas->update([
            'nama_kelas' => $this->namakelas,
            'kompetensi_keahlian' => $this->jurusan,
        ]);

        if ($kelas) {
            $this->emit('toastify', ['success', "berhasil diupdate"]);
        } else {
            $this->emit('toastify', ['danger', "update gagal"]);
        } 
    }
}
