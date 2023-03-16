<?php

namespace App\Http\Livewire;

use App\Models\Spp;
use Livewire\Component;

class PilihSpp extends Component
{
    public $spp_id;
    public $tahun_spp;
    public $nominal_spp;

    public function render()
    {
        return view('livewire.pilih-spp', [
            'spps' => Spp::all(),
        ]);
    }

    public function setSpp($id)
    {
        $spp = Spp::find($id);
        
        $this->spp_id = $spp->id;
        $this->tahun_spp = $spp->tahun;
        $this->nominal_spp = $spp->nominal;
    }
}
