<?php

namespace App\Http\Livewire\DataSiswa;

use App\Models\Siswa;
use Livewire\Component;

class IndexDataSiswa extends Component
{
    public $search;
    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function render()
    {
        $datasiswa = Siswa::orderByDesc('nis');

        if ($this->search != null) {
            $datasiswa->where('nama' , 'like', '%'. $this->search .'%');
        }

        return view('livewire.data-siswa.index-data-siswa', [
            'datasiswas' => $datasiswa->get(),
        ]);
    }

    public function getSiswa($id)
    {
        $this->emit('getSiswa', $id);
    }
}
