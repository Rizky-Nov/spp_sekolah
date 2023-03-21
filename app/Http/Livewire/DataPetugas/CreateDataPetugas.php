<?php

namespace App\Http\Livewire\DataPetugas;

use App\Models\Level;
use App\Models\Petugas;
use App\Traits\ListenerTrait;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateDataPetugas extends Component
{
    use ListenerTrait;

    public $namapetugas;
    public $username;
    public $password;

    public $level;

    protected $listeners = [
        'swal', 'fresh', 'toastify',
        'setLevel',
    ];

    protected $rules = [
        'namapetugas' => 'required',
        'username' => 'required|unique:petugas,username',
        'password' => 'required',
    ];

    protected $messages = [
        'namapetugas.required' => 'harus diisi terlebih dahulu',

        'username.required' => 'harus diisi terlebih dahulu',
        'username.unique ' => 'username petugas harus berbeda',
        
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
        $this->level = "";
    }

    public function setLevel($id)
    {
        $level_id = Str::beforeLast($id, ' - ');
        $level = Level::find($level_id);

        $this->level = $level;
    }

    public function store()
    {
        $this->validate();
        
        $petugas = Petugas::create([
            'username' => $this->username,
            'password' => bcrypt($this->password),
            'nama_petugas' => $this->namapetugas,
            'level_id' => $this->level->id,
        ]);

        if ($petugas) {
            $this->emit('berhasil', ['success', "Berhasil Buat"]);
            $this->bersih();
        } else {
            $this->emit('gagal', ['danger', "Gagal"]);
        }
        
    }
}
