<?php

namespace App\Http\Livewire\DataSpp;

use App\Models\Spp;
use Livewire\Component;

class IndexSpp extends Component
{
    public function render()
    {
        return view('livewire.data-spp.index-spp', [
            'spps' => Spp::all(),
        ]);
    }
}
