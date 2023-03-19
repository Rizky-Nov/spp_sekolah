<div class="col-12 d-flex flex-column" style="gap: 24px;">
    <div class="d-flex">
        <form >
            <div class="col-6 d-flex align-items-end" style="gap: 24px">
                @csrf
                <div class="form-group w-100" style="width: 120px; height: 48px;">
                  <label for="tgl-awal"></label>
                  <input type="date" wire:model.lazy='tgl_awal' id="tgl-awal" class="form-control" >
                </div>

                <div class="form-group w-100" style="width: 120px; height: 48px;">
                  <label for="tgl-akhir"></label>
                  <input type="date" wire:model.lazy='tgl_akhir' id="tgl-akhir" class="form-control" >
                </div>
            </div>
        </form>

        <div class="col-6 d-flex justify-content-end align-items-end    ">
            <div class="col-12 d-flex justify-content-end align-items-end">
                <button class="btn btn-warning" wire:click='cetak'>Cetak</button>
            </div>
        </div>
    </div>

    <div class="siswa-spp my-shadow-2 w-100">
        <table class="w-100">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nis</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Tahun Spp</th>
                    <th>Bulan</th>
                    <th>Nominal</th>
                </tr>
            </thead>
    
            <tbody>
                @foreach ($historis as $history)
                {{-- {{ $history }} --}}
                    @if (!$history)
                        <tr>
                            <td>
                                <span class="text-neutral-90 header-m">Belum Ada Pembayaran</span>
                            </td>
                        </tr>
                    @else
                        <tr>
                            <td class="text-neutral-90 text-m-medium">{{ $loop->iteration }}</td>
                            <td class="text-neutral-90 text-m-medium">{{ $history->siswa->nis }}</td>
                            <td class="text-neutral-90 text-m-medium">{{ $history->siswa->nama }}</td>
                            <td class="text-neutral-90 text-m-medium">{{ $history->siswa->kelas->nama_kelas . " ( " . $history->siswa->kelas->kompetensi_keahlian . " )" }}</td>
                            <td class="text-neutral-90 text-m-medium">{{ $history->tahun_dibayar }}</td>
                            <td class="text-neutral-90 text-m-medium">{{ $history->bulan->bulan }}</td>
                            <td class="text-neutral-90 text-m-medium">{{ $history->jumlah_bayar }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>