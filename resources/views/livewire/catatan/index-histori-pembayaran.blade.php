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
            {{-- {{ $history }} --}}
                @if (!$history)
                    <tr>
                        <td>
                            <span class="text-neutral-90 header-m">Belum Ada Pembayaran</span>
                        </td>
                    </tr>
                @else
                    <tr>
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