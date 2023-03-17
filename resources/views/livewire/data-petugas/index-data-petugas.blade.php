<div class="col-12 d-flex flex-column">
    <div class="col-12 d-flex justify-content-end">
        <form action="#">
            @csrf
            <div class="search form-group">
              <input type="text" wire:model.debounce='search' class="form-control" placeholder="Search . . . .">
            </div>
        </form>
    </div>
    
    <div class="col-12">
        <div class="tabel col-12 mt-4">
            <table class="col-12">
                <thead class="head">
                    <tr class="w-100">
                        <th class="text-neutral-90 text-l-medium fw-bold">Nama Petugas</th>
                        <th class="text-neutral-90 text-l-medium fw-bold">Username</th>
                        <th class="text-neutral-90 text-l-medium fw-bold">Password</th>
                        <th class="text-neutral-90 text-l-medium fw-bold">Level</th>
                        <th style="width: 180px"></th>
                    </tr>
                </thead>
            
                <tbody>
                    @foreach ($datapetugases as $datapetugas)
                        <tr>
                            <td class="text-neutral-90 text-m-regular">{{ $datapetugas->nama_petugas }}</td>
                            <td class="text-neutral-90 text-m-regular">{{ $datapetugas->username }}</td>
                            <td class="text-neutral-90 text-m-regular">***********************</td>
                            <td class="text-neutral-90 text-m-regular">{{ $datapetugas->level->level }}</td>
                            <td>
                                <div class="d-flex" style="gap: 24px; width: 180px">
                                    <button class="btn btn-warning" wire:click='getPetugas({{ $datapetugas->id }})' data-bs-toggle="modal" data-bs-target="#EditPetugas">Edit</button>
                                    <button class="btn btn-danger" wire:click='deletecek({{ $datapetugas->id }})'>Hapus</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="separator w-100 mt-5"></div>

        <div class="col-11" style="margin-top: 24px">
            <span class="header-s text-neutral-90">Data Petugas</span>
            
            <livewire:data-petugas.create-data-petugas />
            
        </div>
    </div>   
</div>