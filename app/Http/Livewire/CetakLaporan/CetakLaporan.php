<?php

namespace App\Http\Livewire\CetakLaporan;

use App\Models\PembayaranSpp;
use App\Traits\ListenerTrait;
use Livewire\Component;

class CetakLaporan extends Component
{
    use ListenerTrait;

    public $tgl_awal;
    public $tgl_akhir;
    

    protected $listeners = [
        'setTanggal',
    ];

    public function setTanggal($params)
    {
        $this->tgl_awal = $params[0];
        $this->tgl_akhir = $params[1];
        $this->emit('cetak');
    }

    public function render()
    {
        if ($this->tgl_awal == null && $this->tgl_akhir == null) {
            $this->tgl_awal = date('Y-m-d');
            $this->tgl_akhir = date('Y-m-d');
        }

        $laporan = PembayaranSpp::orderByDesc('tgl_bayar')->orderByDesc('bulan_dibayar')->orderByDesc('tahun_dibayar');

        if ($this->tgl_awal) {
            $laporan->whereDate('tgl_bayar', '>=', $this->tgl_awal);
        }
        
        if ($this->tgl_akhir) {
            $laporan->whereDate('tgl_bayar', '<=', $this->tgl_akhir);
        }

        return view('livewire.cetak-laporan.cetak-laporan', [
            'cetaks' => $laporan->get(),
        ]);
    }
}
