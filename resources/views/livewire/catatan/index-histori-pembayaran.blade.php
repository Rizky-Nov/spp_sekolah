<div class="col-12 d-flex flex-column" style="gap: 24px">
    <div class="col-12">
        <div class="d-flex" style="gap: 36px">
            <div class="col-2">
                <div class="form-group">
                  <label for="nama">Nama Siswa</label>
                  <input type="text" name="" id="nama" class="form-control" placeholder="untuk filter">
                </div>
            </div>

            <div class="col-2">
                <div class="form-group">
                  <label for="kelas">Kelas</label>
                  <input type="text" name="" id="kelas" class="form-control" placeholder="untuk filter">
                </div>
            </div>

            <div class="col-2">
                <div class="form-group">
                  <label for="jurusan">Kompetensi Keahlian</label>
                  <input type="text" name="" id="jurusan" class="form-control" placeholder="untuk filter">
                </div>
            </div>
        </div>
    </div>

    <div class="siswa-spp my-shadow-2 w-100">
        <table class="w-100">
            <thead>
                <tr>
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
                    <tr>
                        <td class="text-neutral-90 text-m-medium">{{ $history->siswa->nis }}</td>
                        <td class="text-neutral-90 text-m-medium">{{ $history->siswa->nama }}</td>
                        <td class="text-neutral-90 text-m-medium">{{ $history->siswa->kelas->nama_kelas . " ( " . $history->siswa->kelas->kompetensi_keahlian . " )" }}</td>
                        <td class="text-neutral-90 text-m-medium">{{ $history->tahun_dibayar }}</td>
                        <td class="text-neutral-90 text-m-medium">{{ $history->bulan->bulan }}</td>
                        <td class="text-neutral-90 text-m-medium">Rp. {{ number_format($history->jumlah_bayar) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
