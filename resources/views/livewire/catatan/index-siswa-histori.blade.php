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
            @foreach ($SiswaHistori as $histori)
                <tr>
                    <td class="text-neutral-90 text-m-medium">{{ $histori->siswa->nis }}</td>
                    <td class="text-neutral-90 text-m-medium">{{ $histori->siswa->nama }}</td>
                    <td class="text-neutral-90 text-m-medium">{{ $histori->siswa->kelas->nama_kelas . " ( " . $histori->siswa->kelas->kompetensi_keahlian . " )" }}</td>
                    <td class="text-neutral-90 text-m-medium">{{ $histori->tahun_dibayar }}</td>
                    <td class="text-neutral-90 text-m-medium">{{ $histori->bulan->bulan }}</td>
                    <td class="text-neutral-90 text-m-medium">{{ $histori->jumlah_bayar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>