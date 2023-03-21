<?php

namespace App\Http\Livewire;

use App\Models\Level;
use Livewire\Component;

class PilihLevel extends Component
{
    public $level_id;
    public $level;

    public function render()
    {
        return view('livewire.pilih-level', [
            'levels' => Level::all(),
        ]);
    }

    public function setLevel($id)
    {
        $kelas = Level::find($id);

        $this->level_id = $kelas->id;
        $this->level = $kelas->nama_kelas;
    }
}
