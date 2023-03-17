<?php

namespace App\Http\Livewire\DataKelas;

use App\Models\Kelas;
use App\Traits\ListenerTrait;
use Livewire\Component;

class CreateDataKelas extends Component
{
    use ListenerTrait;

    public $namakelas;
    public $jurusan;

    protected $listeners = [
        'swal', 'fresh', 'toastify',
    ];

    protected $rules = [
        'namakelas' => 'required',
        'jurusan' => 'required',
    ];

    protected $messages = [
        'namakelas.required' => 'harus diisi terlebih dahulu',
        // 'tahun_spp.min:4' => 'minimal karakter kurang',

        'jurusan.required' => 'harus diisi terlebih dahulu',
        // 'nominal_spp.alpha:num' => 'harus berupa angka',
    ];

    public function render()
    {
        return view('livewire.data-kelas.create-data-kelas');
    }

    public function bersih()
    {
        $this->namakelas = "";
        $this->jurusan = "";
    }

    public function store()
    {
        $kelas = Kelas::create([
            'nama_kelas' => $this->namakelas,
            'kompetensi_keahlian' => $this->jurusan,
        ]);

        if ($kelas) {
            $this->emit('toastify', ['success', "berhasil diupdate"]);
            $this->bersih();
        } else {
            $this->emit('toastify', ['danger', "update gagal"]);
        } 
    }
}
