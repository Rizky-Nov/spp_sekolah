<?php

namespace App\Http\Livewire\Transaksi;

use App\Models\Bulan;
use App\Models\PembayaranSpp;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class IndexSpp extends Component
{
    public $siswa;
    public $bulan_id;
    public $bulan;
    public $tahun;

    protected $listeners = [
        'setSiswa'
    ];

    public function render()
    {
        return view('livewire.transaksi.index-spp-pembayaran', [
            'datasiswas' => Siswa::all(),
            'bulans' => Bulan::all(),
            'pembayarans' => PembayaranSpp::all(),
        ]);
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
    }

    public function store($bulan)
    {
        $petugas = Auth::guard('petugas')->user()->id;

        PembayaranSpp::create([
            'petugas_id' => $petugas,
            'siswa_id' => $this->siswa->id,
            'spp_id' => $this->siswa->spp->id,
            'tgl_bayar' => date('Y-m-d'),
            'bulan_dibayar' => $bulan,
            'tahun_dibayar' => $this->siswa->spp->tahun,
            'jumlah_bayar' => $this->siswa->spp->nominal,
        ]);
    }

    // $table->foreignId('petugas_id')->constrained();
    // $table->foreignId('siswa_id')->constrained();
    // $table->foreignId('spp_id')->constrained();
    // $table->date('tgl_bayar');
    // $table->string('bulan_dibayar');
    // $table->string('tahun_dibayar');
    // $table->integer('jumlah_bayar');
}
