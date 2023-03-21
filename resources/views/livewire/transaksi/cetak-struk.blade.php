<x-modal id="cetakStruk">
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .modal-bodyI {
            position: relative;
            width: 500px
        }
        .headCetak {
            display: flex;
            justify-content: center;
            border-bottom: 1px dashed #000;
            padding-bottom: 20px;
        }
        .headCetak img {
            top: 0;
            left: 0;
        }
        .contentCetak {
            padding: 15px 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            /* justify-content: center; */
        }
        table {
            width: 100%;
            /* background: #000; */
            margin: 10px 0;
        }
        .dash {
            content: '';
            height: 1px;
            width: 100%;
            background: #000;
        }
        .footer {
            text-align: center;
            margin: 35px 0 15px 0
        }
        .transaksi {
            width: 90%;
            /* background: #000; */
            margin: 10px;
            padding: 0 10px;
            display: flex;
            justify-content: end;
        }
        .transaksi table {
            width: 40%
        }
    </style>
    <div class="modal-bodyI align-items-center" id="isi">
        <div class="headCetak">
            <img src="{{ asset('img/tip.png') }}" alt="SMK T.I.P." width="70px" height="70px" style="position: absolute">
            <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; font-size: 20px;">
                <span>SMK Teknologi Industri Pembangunan</span>
                <span>Alamat</span>
                <span>-</span>
            </div>
        </div>
        <div class="dash"></div>
        <div class="contentCetak">
            <div style="text-align: center; font-size: 20px; margin-bottom: 20px">Bukti Pembayaran</div>
            {{-- @if ($struk) --}}
                @foreach ($struks as $s)
                <div class="dash"></div>

                <div class="col-12" style="border: 1px solid lightgray; padding: 12px; border-radius: 12px">
                    <table class="col-12">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr style="height: 48px">
                                <td>No Transaksi</td>
                                <td>: {{ $s->id }}</td>
                                <td>Tanggal</td>
                                <td>: {{ $s->tgl_bayar . date(' H:i:s') }}</td>
                            </tr>

                            <tr style="height: 48px">
                                <td>No Induk  </td>
                                <td>: {{ $s->siswa->nis }}</td>
                                <td>Kelas</td>
                                <td>: {{ $s->siswa->kelas->kompetensi_keahlian }}</td>
                            </tr>

                            <tr style="height: 48px">
                                <td>Nama </td>
                                <td>: {{ $s->siswa->nama }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="transaksi">
                    <table>
                        <tr style="height: 48px">
                            <td style="min-width: 50px">2023</td>
                            <td style="min-width: 70px">{{ $s->bulan->bulan }}</td>
                            <td style="min-width: 70px">{{ 'Rp.' . $s->siswa->spp->nominal }}</td>
                        </tr>
                    </table>
                </div>
                <div class="dash"></div>
                @endforeach
            {{-- @endif --}}
        </div>
        <div class="footer mt-4">
            Terima Kasih
        </div>
    </div>

    <iframe name="printf" id="printf" class="d-none"></iframe>
    
</x-modal>

@push('scripts')
    <script>
        Livewire.on('cetakIni', function () {   
            setTimeout(() => {
                var isi = document.querySelector('#isi').innerHTML;
                window.frames["printf"].document.title = document.title;
                window.frames["printf"].document.body.innerHTML = isi;
                window.frames["printf"].focus();
                window.frames["printf"].print();
            }, 1500);
        });
    </script>
@endpush