<?php

namespace App\Http\Livewire\DataSiswa;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Traits\ListenerTrait;
use ListenerTrait as GlobalListenerTrait;

class CreateDataSiswa extends Component
{
    public $nisn;
    public $nis;
    public $namasiswa;
    public $alamat;
    public $notelp;
    public $password;

    public $namakelas;
    public $jurusan;

    public $kelas_id;
    public $spp_id;
    public $tahun_spp;

    

    public function render()
    {
        // $this->kelas_id = Kelas::orderBy('nama_kelas', 'asc')->first()->id();
        // $this->spp_id = Spp::orderBy('tahun', 'asc')->first()->id();

        return view('livewire.data-siswa.create-data-siswa'); 
        // [
        //     'spps' = Spp::orderBy('tahun', 'asc')->first()->id();
        // ]);
    }

    // public function updated($propertyName)
    // {
    // }
    
    public function store()
    {
        // $tahunspp = Spp::where('tahun', $this->tahun_spp)->get()->id();

        $kelas = Kelas::create([
            'nama_kelas' => $this->namakelas,
            'kompetensi_keahlian' => $this->jurusan,
        ]);

        $this->kelas_id = $kelas->id;

        $siswa = Siswa::create([
            'nisn' => $this->nisn,
            'nis' => $this->nis,
            'nama' => $this->namasiswa,
            'alamat' => $this->alamat,
            'no_telp' => $this->notelp,
            'password' => bcrypt($this->password),
            'kelas_id' => $this->kelas_id,
            'spp_id' => 1,
        ]);

        if ($siswa) {
            $this->emit('toastify', ['success', "Siswa Berhasil Ditambahkan"]);
        } else {
            $this->emit('gagal', ['danger', "Data Tidak Dapat Ditambahkan"]);
        }
    }
}
