<div class="col-12 d-flex flex-column">
    <div class="col-12 d-flex justify-content-end">
        <div class="search form-group">
            <input type="text" wire:model.debounce.100ms='search' class="form-control" placeholder="Search . . . .">
        </div>
    </div>
    
    <div class="col-12 mt-4 d-flex flex-column">
        <div class="tabel col-12">
            <table class="col-12">
                <thead class="head">
                    <tr>
                        <th class="text-neutral-90 text-l-medium fw-bold">No</th>
                        <th class="text-neutral-90 text-l-medium fw-bold">NISN</th>
                        <th class="text-neutral-90 text-l-medium fw-bold">NIS</th>
                        <th class="text-neutral-90 text-l-medium fw-bold">Nama Siswa</th>
                        <th class="text-neutral-90 text-l-medium fw-bold">Kelas</th>
                        <th class="text-neutral-90 text-l-medium fw-bold">No Telephone</th>
                        <th class="text-neutral-90 text-l-medium fw-bold">Alamat</th>
                        <th style="width: 20px"></th>
                    </tr>
                </thead>
            
                <tbody>
                    @foreach ($datasiswas as $datasiswa)
                        <tr>
                            <td class="text-neutral-90 text-m-medium">{{ $loop->iteration }}</td>
                            <td class="text-neutral-90 text-m-regular">{{ $datasiswa->nisn }}</td>
                            <td class="text-neutral-90 text-m-regular">{{ $datasiswa->nis }}</td>
                            <td class="text-neutral-90 text-m-regular">{{ $datasiswa->nama }}</td>
                            <td class="text-neutral-90 text-m-regular">{{ $datasiswa->kelas->nama_kelas . "  " . "(" . $datasiswa->kelas->kompetensi_keahlian . ")" }}</td>
                            <td class="text-neutral-90 text-m-regular">{{ $datasiswa->no_telp }}</td>
                            <td class="text-neutral-90 text-m-regular">{{ $datasiswa->alamat }}</td>
                            <td>
                                <div class="d-flex" style="gap: 24px; width: 180px">
                                    <div class="w-50">
                                        <a class="btn btn-warning" wire:click='getSiswa({{ $datasiswa->id }})' data-bs-toggle="modal" data-bs-target="#EditSiswa">Edit</a>
                                    </div>
                                    
                                    <div class="w-50">
                                        <button class="btn btn-danger" wire:click='deletecek({{ $datasiswa->id }})'>Hapus</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="col-11" style="margin-top: 24px">
            <span class="header-s text-neutral-90">Data Siswa</span>
            
            <livewire:data-siswa.create-data-siswa />
    
        </div>
    </div>
</div>