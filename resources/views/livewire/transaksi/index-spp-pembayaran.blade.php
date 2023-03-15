<div class="col-12 d-flex flex-column" style="gap: 24px">
    <div class="col-12 d-flex" style="gap: 24px">

        <livewire:pilih-siswa-spp />

    </div>
    
    <div class="col-12 d-flex" style="gap: 24px">
        <div class="siswaSpp col-5">
            <div class="siswa-spp my-shadow-2 w-100">
                <table class="w-100">
                    {{-- @foreach ($datasiswas as $datasiswa) --}}
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
                    {{-- @endforeach --}}
                </table>
            </div>
        </div>
    
        <div class="col my-shadow-2">
            <div class="Spp col">
                <div class="siswa-spp col-12">
                    <table class="col-12">
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
                                        $warna = 'danger';
                                        $text = 'Belum Bayar';
                                        $id = false;
                                    @endphp
                                    @foreach ($pembayarans as $pembayaran)
                                        @php
                                            $warna = 'success';
                                            $text = 'Dibayar';
                                            $id = $pembayaran->id;
                                        @endphp
                                    @endforeach

                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="spp" value="checkedValue" style="height: 16px; width: 16px;">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-neutral-90 text-l-medium">{{ $bulan->bulan }}</td>
                                        <td>
                                            <button style="background: {{ $warna }}">{{ $text }}</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success" wire:click='store({{ $bulan->id }})'>ada</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                @foreach ($bulans as $bulan)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="spp" value="checkedValue" style="height: 16px; width: 16px;">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-neutral-90 text-l-medium">{{ $bulan->bulan }}</td>
                                        <td>
                                            <button class="btn btn-danger">Belum Bayar</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success" wire:click='store({{ $bulan->id }})'>ada</button>
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
</div>