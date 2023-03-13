<?php

namespace App\Http\Livewire\DataSiswa;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Spp;
use Livewire\Component;

class EditSiswa extends Component
{
    public $siswa_id;
    public $nisn;
    public $nis;
    public $namasiswa;
    public $alamat;
    public $notelp;

    public $namakelas;
    public $jurusan;

    public $kelas_id;
    public $spp_id;
    public $tahun_spp;

    protected $listeners = [
        'getSiswa'
    ];

    public function render()
    {
        return view('livewire.data-siswa.edit-siswa', [
            'kelases' => Kelas::get(),
            'spps' => Spp::get(),
        ]);
    }

    public function getSiswa($id)
    {
        $siswa = Siswa::find($id);
        
        $this->siswa_id = $siswa->id;
        $this->nisn = $siswa->nisn;
        $this->nis = $siswa->nis;
        $this->namasiswa = $siswa->nama;
        $this->alamat = $siswa->alamat;
        $this->notelp = $siswa->no_telp;
        
    }

    public function update()
    {
        $siswa = Siswa::find($this->siswa_id);

        $siswa->update([
            'nisn' => $this->nisn,
            'nis' => $this->nis,
            'nama' => $this->namasiswa,
            'alamat' => $this->alamat,
            'no_telp' => $this->notelp,
        ]);

        if ($siswa) {
            $this->emit('berhasil', ['success', "Berhasil"]);
        } else {
            $this->emit('gagal', ['danger', "Gagal"]);
        }
        
    }
}
