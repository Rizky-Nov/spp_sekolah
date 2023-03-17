<?php

namespace App\Http\Livewire\DataSpp;

use App\Models\Spp;
use App\Traits\ListenerTrait;
use Livewire\Component;

class IndexSpp extends Component
{
    use ListenerTrait;

    protected $listeners = [
        'swal', 'fresh', 'toastify',
        'getSpp',
    ];

    public function render()
    {
        return view('livewire.data-spp.index-spp', [
            'spps' => Spp::all(),
        ]);
    }

    public function getSpp($id)
    {
        $this->emit('getSpp', $id);
    }

    public function deletecek($id)
    {
        $this->emit('swalConfirm', ['question', "Yakin Ingin Meghapus Data Ini !!", true, 'deleteSpp', $id]);
    }

    public function deleteSpp($id)
    {
        $spp = Spp::find($id);

        if ($spp) {
            $spp->delete();
            $this->emit('toastify', ['success', "berhasil dihapus"]);
        } else {
            $this->emit('toastify', ['danger', "gagal menghapus"]);
        }
    }
}
