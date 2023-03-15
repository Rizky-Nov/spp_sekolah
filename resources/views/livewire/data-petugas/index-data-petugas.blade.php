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
        
        <table class="col-12 tabel-petugas flex-column">
            <thead class="head-petugas">
                <tr class="w-100">
                    <th class="text-neutral-10 text-l-medium">Nama Petugas</th>
                    <th class="text-neutral-10 text-l-medium">Username</th>
                    <th class="text-neutral-10 text-l-medium">Password</th>
                    <th class="text-neutral-10 text-l-medium">Level</th>
                    <th style="width: 180px"></th>
                </tr>
            </thead>
        
            <tbody style="padding: 0px 14px">
                @foreach ($datapetugases as $datapetugas)
                    <tr>
                        <td class="text-neutral-90 text-m-regular">{{ $datapetugas->nama_petugas }}</td>
                        <td class="text-neutral-90 text-m-regular">{{ $datapetugas->username }}</td>
                        <td class="text-neutral-90 text-m-regular">{{ $datapetugas->password }}</td>
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
        
        <div class="separator w-100 mt-5"></div>

        <div class="col-11" style="margin-top: 24px">
            <span class="header-s text-neutral-90">Data Petugas</span>
            
            <livewire:data-petugas.create-data-petugas />
            
        </div>
    </div>   
</div>