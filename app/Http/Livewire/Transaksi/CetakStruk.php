<?php

namespace App\Http\Livewire\Transaksi;

use App\Models\Bulan;
use App\Models\PembayaranSpp;
use App\Traits\ListenerTrait;
use Livewire\Component;

class CetakStruk extends Component
{
    use ListenerTrait;

    public $siswa;
    public $bulan_id;
    public $bulan;
    public $tahun;

    protected $listeners = [
        'setStruk',
    ];

    public function setStruk()
    {
        
        $this->emit('cetak');
    }

    public function render()
    {
        if ($this->tahun == null) {
            $this->tahun = date('Y');
        }
        
        $pembayaran = PembayaranSpp::orderByDesc('bulan_dibayar');

        // dd($pembayaran->get());
        if ($this->tahun != null) {
            $pembayaran->where('tahun_dibayar', $this->tahun);
        }

        if ($this->siswa != null) {
            $pembayaran->where('siswa_id', $this->siswa->id);
        }

        return view('livewire.transaksi.cetak-struk', [
            'struks' => $pembayaran->get(),
            'bulans' => Bulan::all(),
        ]);
    }
}
