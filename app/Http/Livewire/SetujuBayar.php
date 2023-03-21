<?php

namespace App\Http\Livewire;

use App\Models\PembayaranSpp;
use App\Models\Siswa;
use App\Traits\ListenerTrait;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class SetujuBayar extends Component
{
    use ListenerTrait;

    public $siswa;
    public $bulan_id;
    public $bulan;
    public $tahun;

    protected $listeners = [
        'store',
    ];

    public function render()
    {
        return view('livewire.setuju-bayar');
    }

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
}
