<div class="col-12 hidden">
    <div class="col-12" id="cetakLaporan">
        <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">

        <div class="col-12">
            <table class="col-12">
                <thead>
                    <tr>
                        <th>Tanggal Pembayaran</th>
                        <th>Bulan Tahun Spp</th>
                        <th>Nominal</th>
                        <th>Nama Siswa</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($cetaks as $cetak)
                        <tr>
                            <td>{{ $cetak->tgl_bayar }}</td>
                            <td>{{ $cetak->bulan->bulan . "  " . $cetak->tahun_dibayar }}</td>
                            <td>Rp.{{ number_format($cetak->jumlah_bayar) }}</td>
                            <td>{{ $cetak->siswa->nama }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <iframe name="cetakPembayaran" id="cetakPembayaran" class="d-none"></iframe>
</div>

@push('scripts')
    <script>
        Livewire.on('cetak', function () {        
            setTimeout(() => {
                var isi = document.querySelector('#cetakLaporan').innerHTML;
                console.log(isi);
                window.frames["cetakPembayaran"].document.title = document.title;
                window.frames["cetakPembayaran"].document.body.innerHTML = isi;
                window.frames["cetakPembayaran"].focus();
                window.frames["cetakPembayaran"].print();
            }, 500);
        })
    </script>
@endpush