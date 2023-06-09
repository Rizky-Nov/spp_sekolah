<?php

namespace App\Http\Livewire\DataSiswa;

use App\Models\Kelas;
use App\Models\Spp;
use Illuminate\Support\Facades\DB;
use ListenerTrait as GlobalListenerTrait;
use Illuminate\Support\Str;
use App\Models\Siswa;
use Livewire\Component;
use App\Traits\ListenerTrait;
use Illuminate\Validation\Rules\Unique;

class CreateDataSiswa extends Component
{
    use ListenerTrait;

    public $nisn;
    public $nis;
    public $namasiswa;
    public $alamat;
    public $notelp;
    public $password;

    public $kelas;
    public $spp;

    protected $listeners = [
        'swal', 'fresh', 'toastify',
        // 'setSiswa',
        'setKelas',
        'setSpp',
    ];

    protected $rules = [
        'nisn' => 'required|numeric|min:5|unique:siswas,nisn',
        'nis' => 'required|numeric|min:5|unique:siswas,nis',
        'namasiswa' => 'required|min:5',
        'alamat' => 'required|min:5',
        'notelp' => 'required|numeric|min:5',
        'password' => 'required|min:5',
    ];

    protected $messages = [
        'nisn.required' => "harus masukkan data dahulu",
        'nisn.numeric' => "harus berupa angka-angka",
        'nisn.min:5' => "tidak sesuai minimal karakter",
        'nisn.unique' => "data nisn tidak boleh sama",
        
        'nis.required' => "harus masukkan data dahulu",
        'nis.numeric' => "harus berupa angka-angka",
        'nis.min:5' => "tidak sesuai minimal karakter",
        'nis.unique' => "data nis tidak boleh sama",
        
        'namasiswa.required' => "harus masukkan data dahulu",
        'namasiswa.min:5' => "tidak sesuai minimal karakter",
        
        'alamat.required' => "harus masukkan data dahulu",
        'alamat.min:5' => "tidak sesuai minimal karakter",
        
        'notelp.required' => "harus masukkan data dahulu",
        'notelp.min:5' => "tidak sesuai minimal karakter",
        
        'password.required' => "harus masukkan data dahulu",
        'password.min:5' => "tidak sesuai minimal karakter",
    ];

    public function render()
    {
        return view('livewire.data-siswa.create-data-siswa'); 
    }

    public function setKelas($id)
    {
        $kelas_id = Str::beforeLast($id, ' - ');
        $kelas = Siswa::find($kelas_id);

        $this->kelas = $kelas;
    }
    
    public function setSpp($id)
    {
        $spp_id = Str::beforeLast($id, ' - ');
        $spp = Siswa::find($spp_id);

        $this->spp = $spp;
    }

    public function bersih()
    {
        $this->nisn = "";
        $this->nis = "";
        $this->namasiswa = "";
        $this->alamat = "";
        $this->notelp = "";
        $this->password = "";
        $this->kelas->id = "";
        $this->spp->id = "";
    }
    
    public function storeSiswa()
    {
        $this->validate();
        
        $siswa = Siswa::create([
            'nisn' => $this->nisn,
            'nis' => $this->nis,
            'nama' => $this->namasiswa,
            'alamat' => $this->alamat,
            'no_telp' => $this->notelp,
            'password' => bcrypt($this->password),
            'kelas_id' => $this->kelas->id,
            'spp_id' => $this->spp->id,
        ]);

        if ($siswa) {
            $this->emit('toastify', ['success', "Siswa Berhasil Ditambahkan"]);
            $this->bersih();
        } else {
            $this->emit('toastify', ['danger', "Data Error Harap Refresh"]);
        }
    }
}
