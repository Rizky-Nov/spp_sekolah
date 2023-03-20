<?php

namespace App\Http\Livewire\Transaksi;

use App\Models\Bulan;
use App\Models\PembayaranSpp;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class IndexSppPembayaran extends Component
{
    public $siswa;
    public $bulan_id;
    public $bulan;
    public $tahun;

    protected $listeners = [
        'setSiswa',
        'setTahun',
        'cetakStruk',
    ];
    public function setTahun($value)
    {
        $this->tahun = $value;
        // dd($this->tahun);
    }

    // public function cetak()
    // {
    //     $this->emit('setStruk', [$this->siswa->id]);
    // }

    public function setSiswa($id)
    {
        $siswa_id = Str::beforeLast($id, ' - ');
        $siswa = Siswa::find($siswa_id);
        if ($siswa) {
            $this->siswa = $siswa;
            $this->emit('toastify', ['success', "Siswa Ditemukan"]);
        } else {
            $this->emit('toastify', ['danger', "Siswa Tidak Ada"]);
        }
        $this->render();
    }

    // public function cetakStruk($id)
    // {
    //     $pembayaran = PembayaranSpp::orderByDesc('id')->orderByDesc('bulan_dibayar');

    //     $this->emit('cetakStruk', $pembayaran->id);
    // }

    // public function bayarcek($id)
    // {
    //     $this->emit('swalConfirm', ['question', "Bayar SPP", true, 'store', $id]);
    // }

    public function store($bulan, $id)
    {
        $petugas = Auth::guard('petugas')->user()->id;

        if ($this->siswa != null) {
            if ($id <= 0) {
                $pembayaran = PembayaranSpp::create([
                    'petugas_id' => $petugas,
                    'siswa_id' => $this->siswa->id,
                    'spp_id' => $this->siswa->spp->id,
                    'tgl_bayar' => date('Y-m-d'),
                    'bulan_dibayar' => $bulan,
                    'tahun_dibayar' => $this->tahun,
                    'jumlah_bayar' => $this->siswa->spp->nominal,
                ]);
                $this->emit('cetakStruk', $pembayaran->id);
            } else {                
                $this->emit('toastify', ['danger', "Pembayaran Telah Tersedia"]);
            }
        } else {
            $this->emit('toastify', ['danger', "belum pilih siswa"]);
        }

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
        
        return view('livewire.transaksi.index-spp-pembayaran', [
            'pembayarans' => $pembayaran->get(),
            'bulans' => Bulan::all(),
            'historis' => PembayaranSpp::orderByDesc('id')->get(),
        ]);
    }
}