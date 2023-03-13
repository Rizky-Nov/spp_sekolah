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
                        <button class="btn btn-danger">Hapus</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>