<div class="col-12 d-flex justify-content-end">
    <div class="search form-group">
        {{-- <label for=""></label> --}}
        <input type="text" wire:model.debounce.2000ms='search' class="form-control" placeholder="Search . . . .">
    </div>
</div>

<div class="col-12">
    
    <table class="tabel-siswa d-flex flex-column">
        <thead class="tabel-head">
            <tr class="w-100">
                <th class="text-neutral-10 text-l-medium">NISN</th>
                <th class="text-neutral-10 text-l-medium">NIS</th>
                <th class="text-neutral-10 text-l-medium">Nama Siswa</th>
                <th class="text-neutral-10 text-l-medium">Kelas</th>
                <th class="text-neutral-10 text-l-medium">No Telephone</th>
                <th class="text-neutral-10 text-l-medium">Alamat</th>
                <th style="width: "></th>
            </tr>
        </thead>
    
        <tbody class="tabel-body">
            @foreach ($datasiswas as $datasiswa)
                <tr class="w-100 d-flex justify-content-start align-items-center">
                    <td class="text-neutral-90 text-m-regular">{{ $datasiswa->nisn }}</td>
                    <td class="text-neutral-90 text-m-regular">{{ $datasiswa->nis }}</td>
                    <td class="text-neutral-90 text-m-regular">{{ $datasiswa->nama }}</td>
                    <td class="text-neutral-90 text-m-regular">{{ $datasiswa->kelas->nama_kelas }}</td>
                    <td class="text-neutral-90 text-m-regular">{{ $datasiswa->no_telp }}</td>
                    <td class="text-neutral-90 text-m-regular">{{ $datasiswa->alamat }}</td>
                    <td>
                        <div class="d-flex" style="gap: 24px; width: 180px">
                            <div class="w-50">
                                <a class="btn btn-warning" wire:click='getSiswa({{ $datasiswa->id }})' data-bs-toggle="modal" data-bs-target="#EditSiswa">Edit</a>
                            </div>
                            <div class="w-50">
                                <button class="btn btn-danger">Hapus</button>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="col-11" style="margin-top: 24px">
        <span class="header-s text-neutral-90">Data Siswa</span>
        
        <livewire:data-siswa.create-data-siswa />

    </div>
</div>