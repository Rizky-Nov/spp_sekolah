<?php

namespace App\Http\Livewire\DataPetugas;

use App\Models\Petugas;
use App\Traits\ListenerTrait;
use Livewire\Component;

class CreateDataPetugas extends Component
{
    use ListenerTrait;

    public $namapetugas;
    public $username;
    public $password;

    public $level_id;

    protected $listeners = [
        'swal', 'fresh', 'toastify',
    ];

    protected $rules = [
        'namapetugas' => 'required',
        'username' => 'required',
        'password' => 'required',
    ];

    protected $messages = [
        'namapetugas.required' => 'harus diisi terlebih dahulu',

        'username.required' => 'harus diisi terlebih dahulu',
        
        'password.required' => 'harus diisi terlebih dahulu',
        
    ];


    public function render()
    {
        return view('livewire.data-petugas.create-data-petugas');
    }

    public function bersih()
    {
        $this->username = "";
        $this->password = "";
        $this->namapetugas = "";
        $this->level_id = "";
    }

    public function store()
    {
        $petugas = Petugas::create([
            'username' => $this->username,
            'password' => bcrypt($this->password),
            'nama_petugas' => $this->namapetugas,
            'level_id' => $this->level_id,
        ]);

        if ($petugas) {
            $this->emit('berhasil', ['success', "Berhasil Buat"]);
            $this->bersih();
        } else {
            $this->emit('gagal', ['danger', "Gagal"]);
        }
        
    }
}
