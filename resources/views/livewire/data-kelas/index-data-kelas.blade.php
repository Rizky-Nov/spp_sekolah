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
                        <button class="btn btn-danger">Hapus</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>