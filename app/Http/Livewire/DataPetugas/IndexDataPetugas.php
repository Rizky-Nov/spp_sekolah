<?php

namespace App\Http\Livewire\DataPetugas;

use App\Models\Petugas;
use App\Traits\ListenerTrait;
use Livewire\Component;
use Illuminate\Support\Str;

class IndexDataPetugas extends Component
{
    use ListenerTrait;

    public $search;

    protected $listeners = [
        'deletePetugas'
    ];

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function render()
    {
        $datapetugas = Petugas::orderByDesc('nama_petugas');
        // $password = Str::mask

        if ($this->search != null) {
            $datapetugas->where('nama_petugas' , 'like', '%'. $this->search .'%');
        }

        return view('livewire.data-petugas.index-data-petugas', [
            'datapetugases' => $datapetugas->get(),
        ]);
    }

    public function getPetugas($id)
    {
        $this->emit('getPetugas', $id);
    }

    public function deletecek($id)
    {
        $this->emit('swalConfirm', ['question', "Yakin Ingin Meghapus Data Ini !!", true, 'deletePetugas', $id]);
    }

    public function deletePetugas($id)
    {
        $petugas = Petugas::find($id);

        if ($petugas) {
            $petugas->delete();
        }
    }
}
