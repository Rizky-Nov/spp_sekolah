<div class="col-12 d-flex flex-column">
    <div class="col-12 d-flex justify-content-end">
        <div class="search form-group">
          <input type="text" wire:model.debounce='search' class="form-control" placeholder="Search . . . .">
        </div>
    </div>

    <div class="col-12">
        <table class="col-12 tabel-petugas flex-column">
            <thead class="head-petugas">
                <tr class="w-100">
                    <th class="text-neutral-10 text-l-medium">Nama Kelas</th>
                    <th class="text-neutral-10 text-l-medium">Kompetensi Keahlian</th>
                    <th style="width: 180px"></th>
                </tr>
            </thead>
        
            <tbody style="padding: 0px 14px">
                @foreach ($datakelases as $datakelas)
                    <tr>
                        <td class="text-neutral-90 text-m-regular">{{ $datakelas->nama_kelas }}</td>
                        <td class="text-neutral-90 text-m-regular">{{ $datakelas->kompetensi_keahlian }}</td>
                        <td>
                            <div class="d-flex" style="gap: 24px; width: 180px">
                                <button class="btn btn-warning" wire:click='getKelas({{ $datakelas->id }})' data-bs-toggle="modal" data-bs-target="#EditKelas">Edit</button>
                                <button class="btn btn-danger" wire:click='deletecek({{ $datakelas->id }})'>Hapus</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="col-11" style="margin-top: 24px">
            <span class="header-s text-neutral-90">Data Kelas</span>
            
            <livewire:data-kelas.create-data-kelas />
            
        </div>
    </div>
</div>