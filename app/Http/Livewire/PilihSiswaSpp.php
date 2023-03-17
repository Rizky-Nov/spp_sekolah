<?php

namespace App\Http\Livewire;

use App\Models\Siswa;
use Livewire\Component;

class PilihSiswaSpp extends Component
{
    public $siswa_id;
    public $nisn;
    public $nis;
    public $namasiswa;
    public $alamat;
    public $notelp;
    public $password;

    public $kelas_id;
    public $namakelas;
    public $jurusan;

    public $spp_id;
    public $tahun_spp;

    public function render()
    {
        $datasiswa = Siswa::all();

        return view('livewire.pilih-siswa-spp', [
            'datasiswas' => $datasiswa,
        ]);
    }

    public function setSiswa($id)
    {
        $siswa = Siswa::find($id);

        $this->siswa_id = $siswa->id;
        $this->nisn = $siswa->nisn;
        $this->nis = $siswa->nis;
        $this->namasiswa = $siswa->nama;
        $this->alamat = $siswa->alamat;
        $this->notelp = $siswa->no_telp;
        $this->tahun_spp = $siswa->spp->tahun;
    }

}
