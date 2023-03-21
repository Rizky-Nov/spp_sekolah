<div class="col-12 d-flex flex-column">
    <div class="col-12 d-flex justify-content-end">
        <div class="search form-group">
          <input type="text" wire:model.debounce='search' class="form-control" placeholder="Search . . . .">
        </div>
    </div>


    <div class="col-12">
        <div class="tabel col-12 mt-4">
            <table class="col-12">
                <thead class="head">
                    <tr class="w-100">
                        <th class="text-neutral-90 text-l-medium fw-bold">No</th>
                        <th class="text-neutral-90 text-l-medium fw-bold">Nama Kelas</th>
                        <th class="text-neutral-90 text-l-medium fw-bold">Kompetensi Keahlian</th>
                        <th style="width: 180px"></th>
                    </tr>
                </thead>
            
                <tbody>
                    @foreach ($datakelases as $datakelas)
                    <tr>
                        <td class="text-neutral-90 text-m-medium">{{ $loop->iteration }}</td>
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
        </div>
        
        <div class="col-11" style="margin-top: 24px">
            <span class="header-s text-neutral-90">Data Kelas</span>
            
            <livewire:data-kelas.create-data-kelas />
            
        </div>
    </div>
</div>