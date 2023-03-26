<?php

namespace App\Http\Livewire;

use App\Models\PembayaranSpp;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ModalCreatePembayaran extends Component
{
    public $bulan_id;
    public $pembayaran_id;
    public $siswa;
    public $tahun;

    protected $listeners = [
        'konfirmPembayaran'
    ];

    public function konfirmPembayaran($params)
    {
        $this->bulan_id = $params[0];
        $this->pembayaran_id = $params[1];
        $this->tahun = $params[2];
        $this->siswa = Siswa::find($params[3]);
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
                $this->emit('toastify', ['success', 'Berhasil Melakukan Pembayaran',2000]);
            } else {                
                $this->emit('toastify', ['danger', "Pembayaran Telah Tersedia"]);
            }
        } else {
            $this->emit('toastify', ['danger', "belum pilih siswa"]);
        }

    }

    public function render()
    {
        return view('livewire.modal-create-pembayaran');
    }
}
