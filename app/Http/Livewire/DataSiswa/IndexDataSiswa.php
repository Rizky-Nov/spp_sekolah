<?php

namespace App\Http\Livewire\DataSiswa;

use App\Models\Kelas;
use App\Models\Siswa;
use Livewire\Component;
use App\Traits\ListenerTrait;

class IndexDataSiswa extends Component
{
    use ListenerTrait;

    public $search;
    public $siswa_id;
    public $cek = true;
    
    protected $listeners = [
        'swal', 'fresh', 'toastify',
        'deleteSiswa',
    ];
    
    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function render()
    {
        $datasiswa = Siswa::orderByDesc('nis');

        if ($this->search != null) {
            $datasiswa->where('nama' , 'like', '%'. $this->search .'%');
        }
        
        return view('livewire.data-siswa.index-data-siswa', [
            'datasiswas' => $datasiswa->get(),
            'datakelases' => Kelas::all(),
            $this->search => "",
        ]);
    }

    public function getSiswa($id)
    {
        $this->emit('getSiswa', $id);
    }

    public function deletecek($id)
    {
        $this->emit('swalConfirm', ['question', "Yakin Ingin Meghapus Data Ini !!", true, 'deleteSiswa', $id]);
    }

    public function deleteSiswa($id)
    {
        $siswa = Siswa::find($id);

        if ($siswa) {
            $siswa->delete();
            $this->emit('toastify', ['success', "data dihapus"]);
        }
    }
}
