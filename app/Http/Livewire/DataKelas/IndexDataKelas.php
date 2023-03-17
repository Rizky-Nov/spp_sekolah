<?php

namespace App\Http\Livewire\DataKelas;

use App\Models\Kelas;
use App\Traits\ListenerTrait;
use Livewire\Component;

class IndexDataKelas extends Component
{
    use ListenerTrait;

    public $search;

    protected $listeners = [
        'swal', 'fresh', 'toastify',
        'deleteKelas'
    ];

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function render()
    {
        $datakelas = Kelas::orderByDesc('kompetensi_keahlian');

        if ($this->search != null) {
            $datakelas->where('nama_kelas' , 'like', '%'. $this->search .'%');
        }

        return view('livewire.data-kelas.index-data-kelas', [
            'datakelases' => $datakelas->get(),
        ]);
    }

    public function getKelas($id)
    {
        $this->emit('getKelas', $id);
    }

    public function deletecek($id)
    {
        $this->emit('swalConfirm', ['question', "Yakin Ingin Meghapus Data Ini !!", true, 'deleteKelas', $id]);
    }

    public function deleteKelas($id)
    {
        $kelas = Kelas::find($id);

        if ($kelas) {
            $kelas->delete();
            $this->emit('toastify', ['success', "berhasil dihapus"]);
        } else {
            $this->emit('toastify', ['danger', "gagal menghapus"]);
        }
    }
}
