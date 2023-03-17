<?php

namespace App\Http\Livewire;

use App\Models\PembayaranSpp;
use App\Traits\ListenerTrait;
use Livewire\Component;

class IndexCetakLaporanBayar extends Component
{
    use ListenerTrait;

    public $tgl_awal;
    public $tgl_akhir;
    
    protected $listeners = [
        'swal', 'fresh', 'toastify',
    ];

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

        return view('livewire.index-cetak-laporan-bayar', [
            'historis' => $laporan->get(),
        ]);
    }
}
