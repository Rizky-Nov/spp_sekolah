<?php

namespace App\Http\Livewire\DataPetugas;

use App\Models\Petugas;
use App\Traits\ListenerTrait;
use Livewire\Component;

class EditPetugas extends Component
{
    use ListenerTrait;

    public $petugas_id;
    public $namapetugas;
    public $username;
    public $password;

    public $level_id;

    protected $listeners = [
        'getPetugas'
    ];

    public function render()
    {
        return view('livewire.data-petugas.edit-petugas');
    }

    public function getPetugas($id)
    {
        $petugas = Petugas::find($id);

        $this->petugas_id = $petugas->id;
        $this->namapetugas = $petugas->nama_petugas;
        $this->username = $petugas->username;
        $this->password = $petugas->password;
        $this->level_id = $petugas->level->level;
    }

    public function update()
    {
        $petugas = Petugas::find($this->petugas_id);

        $petugas->update([
            'username' => $this->username,
            'password' => $this->password,
            'nama_petugas' => $this->namapetugas,
        ]);
        
        if ($petugas) {
            $this->emit('toastify', ['success', "berhasil diupdate"]);
        } else {
            $this->emit('toastify', ['danger', "gagal mengupdate"]);
        }
    }
}
