<div class="col-12 d-flex flex-column" style="gap: 24px">
    
    <livewire:pilih-siswa-spp />
    
    <div class="col-12 d-flex" style="gap: 24px">
        <div class="siswaSpp col-7 d-flex flex-column" style="gap: 36px">
            <div class="siswa-spp my-shadow-2 w-100">
                <table class="w-100">
                    <thead>
                        <tr>
                            <th class="text-neutral-90 header-s">Nama Siswa :</th>
                            <th class="text-neutral-90 header-s">{{ $siswa ? $siswa->nama : "" }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-neutral-90 text-m-medium">NISN</td>
                            <td class="text-neutral-90 text-m-regular">{{ $siswa ? $siswa->nisn : "" }}</td>
                        </tr>
                        
                        <tr>
                            <td class="text-neutral-90 text-m-medium">NIS</td>
                            <td class="text-neutral-90 text-m-regular">{{ $siswa ? $siswa->nis : "" }}</td>
                        </tr>

                        <tr>
                            <td class="text-neutral-90 text-m-medium">No Telephone</td>
                            <td class="text-neutral-90 text-m-regular">{{ $siswa ? $siswa->no_telp : "" }}</td>
                        </tr>

                        <tr>
                            <td class="text-neutral-90 text-m-medium">Alamat</td>
                            <td class="text-neutral-90 text-m-regular">{{ $siswa ? $siswa->alamat : "" }}</td>
                        </tr>

                        <tr>
                            <td class="text-neutral-90 text-m-medium">Kelas</td>
                            <td class="text-neutral-90 text-m-regular">{{ ($siswa ? $siswa->kelas->nama_kelas : "") . " " . " - " . ($siswa ? $siswa->kelas->kompetensi_keahlian : "") }}</td>
                        </tr>

                        <tr>
                            <td class="text-neutral-90 text-m-medium">Tahun SPP</td>
                            <td class="text-neutral-90 text-m-regular">{{ $siswa ? $siswa->spp->tahun : "" }}</td>
                        </tr>

                        <tr>
                            <td class="text-neutral-90 text-m-medium">Nominal</td>
                            <td class="text-neutral-90 text-m-regular">{{ $siswa ? $siswa->spp->nominal : "" }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- <div class="separator w-100 my-5"></div> --}}

            <div class="col-12 d-flex flex-column">
                <div class="col-12 d-flex justify-content-center">
                    <span class="header-s text-neutral-90">Histori Pembayaran</span>
                </div>

                <div class="separator w-100 my-shadow-2"></div>

                <div class="siswa-spp my-shadow-2 mt-4 w-100">
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
                                @if (!$history)
                                    <tr>
                                        
                                        <span class="text-neutral-90 header-m">Belum Ada Pembayaran</span>
                                        
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
            </div>
        </div>
    
        <div class="col">
            <div class="Spp col">
                <div class="siswa-spp col-12 my-shadow-2">
                    <table class="col-12" wire:poll>
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th style="min-width: 20px; max-width: 20px; width: 10px; "></th>
                            </tr>
                        </thead>
                        <tbody>                            
                            @if ($siswa)
                                @foreach ($bulans as $bulan)
                                    @php
                                        $warna = 'background: linear-gradient(180deg, #FF6D6D 37.5%, #FFA8A8 100%);';
                                        $text = 'Belum Bayar';
                                        $id = 0;
                                    @endphp

                                    @foreach ($pembayarans as $pembayaran)
                                    {{-- {{ $pembayaran }} --}}
                                        @if ($pembayaran->bulan_dibayar == $bulan->id)
                                            @php
                                                $warna = 'background: lightgreen;';
                                                $text = 'Dibayar';
                                                $id = $pembayaran->id;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="spp" style="height: 20px; width: 20px;">
                                                </label>
                                            </div>
                                        </td>

                                        <td class="text-neutral-90 text-l-medium">{{ $bulan->bulan }}</td>

                                        <td>
                                            <button class="text-neutral-10 text-l-medium border-0 my-shadow-2" 
                                            style="height: 40px; width: 140px; border-radius: 12px; {{ $warna }}">{{ $text }}</button>
                                        </td>
                                        <td>
                                            <div class="d-flex" style="gap: 12px">
                                                <button class="btn btn-success" wire:click='store({{ $bulan->id }},{{ $id }})'>Bayar</button>
                                                <button class="btn btn-info" >Cetak</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                @foreach ($bulans as $bulan)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="spp" value="" style="height: 20px; width: 20px;">
                                                </label>
                                            </div>
                                        </td>

                                        <td class="text-neutral-90 text-l-medium">{{ $bulan->bulan }}</td>

                                        <td>
                                            <button class="text-neutral-10 text-l-medium border-0 my-shadow-2" style="background: linear-gradient(180deg, #FF6D6D 37.5%, #FFA8A8 100%); 
                                            height: 40px; width: 140px; border-radius: 12px;">Belum Bayar</button>
                                        </td>
                                        <td>
                                            <div class="d-flex" style="gap: 12px">
                                                <button class="btn btn-success my-shadow-2" wire:click='store({{ $bulan->id }}, 0)'>Bayar</button>
                                                {{-- <button class="btn btn-info my-shadow-2">Cetak</button> --}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <iframe id="struk" name="struk" style="display: none;"></iframe>
    <livewire:transaksi.cetak-struk />
</div>

@push('scripts')
    <script>
        Livewire.on('cetak', function () {        
            setTimeout(() => {
                var isi = document.querySelector('#cetakStruk').innerHTML;
                console.log(isi);
                window.frames["struk"].document.title = document.title;
                window.frames["struk"].document.body.innerHTML = isi;
                window.frames["struk"].focus();
                window.frames["struk"].print();
            }, 500);
        })
    </script>
@endpush