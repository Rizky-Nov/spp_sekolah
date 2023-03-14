<?php

namespace App\Http\Livewire\DataPetugas;

use App\Models\Petugas;
use Livewire\Component;

class CreateDataPetugas extends Component
{
    public $namapetugas;
    public $username;
    public $password;

    public $level_id;

    public function render()
    {
        return view('livewire.data-petugas.create-data-petugas');
    }

    public function store()
    {
        $petugas = Petugas::create([
            'username' => $this->username,
            'password' => bcrypt($this->password),
            'nama_petugas' => $this->namapetugas,
            'level_id' => 1,
        ]);

        if ($petugas) {
            $this->emit('berhasil', ['success', "Berhasil Buat"]);
        } else {
            $this->emit('gagal', ['danger', "Gagal"]);
        }
        
    }
}
