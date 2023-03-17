<?php

namespace App\Http\Livewire\DataSpp;

use App\Models\Spp;
use App\Traits\ListenerTrait;
use Livewire\Component;

class CreateSpp extends Component
{
    use ListenerTrait;

    public $tahun_spp;
    public $nominal_spp;

    protected $listeners = [
        'swal', 'fresh', 'toastify',
    ];

    protected $rules = [
        'tahun_spp' => 'required|min:4',
        'nominal_spp' => 'required|alpha:num',
    ];

    protected $messages = [
        'tahun_spp.required' => 'harus diisi terlebih dahulu',
        'tahun_spp.min:4' => 'minimal karakter kurang',

        'nominal_spp.required' => 'harus diisi terlebih dahulu',
        'nominal_spp.alpha:num' => 'harus berupa angka',
    ];

    public function render()
    {
        return view('livewire.data-spp.create-spp');
    }

    public function bersih()
    {
        $this->tahun_spp = "";
        $this->nominal_spp = "";
    }

    public function store()
    {
        $this->validate();
        
        $spp = Spp::create([
            'tahun' => $this->tahun_spp,
            'nominal' => $this->nominal_spp,
        ]);

        if ($spp) {
            $this->emit('toastify', ['success', "barhasil ditambahkan"]);
            $this->bersih();
        } else {
            $this->emit('toastify', ['success', "gagal ditambahkan"]);
        }
    }
}
