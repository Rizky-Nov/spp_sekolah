<?php

namespace App\Http\Livewire\DataSpp;

use App\Models\Spp;
use App\Traits\ListenerTrait;
use Livewire\Component;

class EditSpp extends Component
{
    use ListenerTrait;

    public $spp_id;
    public $tahun_spp;
    public $nominal_spp;

    protected $listeners = [
        'getSpp',
    ];

    public function render()
    {
        return view('livewire.data-spp.edit-spp');
    }

    public function getSpp($id)
    {
        $spp = Spp::find($id);

        $this->spp_id = $spp->id;
        $this->tahun_spp = $spp->tahun;
        $this->nominal_spp = $spp->nominal;
    }

    public function update()
    {
        $spp = Spp::find($this->spp_id);

        $spp->update([
            'tahun' => $this->tahun_spp,
            'nominal' => $this->nominal_spp,
        ]);

        if ($spp) {
            $this->emit('toastify', ['success', "berhasil diupdate"]);
        } else {
            $this->emit('toastify', ['danger', "gagal diupdate"]);
        }
    }
}
