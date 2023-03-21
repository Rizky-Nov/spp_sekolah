<div class="data-data">
    <div class="data-menu position-relative">
        <div class="dash-data position-absolute h-100">
            <div class="judul">
                <span class="text-neutral-90 text-m-medium">Jumlah Siswa</span>
            </div>
    
            <div class="separator w-100"></div>
            
            <div class="isi h-100 d-flex align-items-center">
                <span>{{ $jmlSiswas }}</span>
            </div>
        </div>
        {{-- <div class="designL col"></div>
        <div class="designR col"></div> --}}
    </div>

    <div class="data-menu position-relative">
        <div class="dash-data position-absolute h-100">
            <div class="judul">
                <span class="text-neutral-90 text-m-medium">Jumlah Petugas</span>
            </div>
    
            <div class="separator w-100"></div>
            
            <div class="isi h-100 d-flex align-items-center">
                <span>{{ $jmlPetugas }}</span>
            </div>
        </div>
        {{-- <div class="designL col"></div>
        <div class="designR col"></div> --}}
    </div>

    <div class="data-menu position-relative">
        <div class="dash-data position-absolute h-100">
            <div class="judul">
                <span class="text-neutral-90 text-m-medium">Jumlah Pembayaran</span>
            </div>
    
            <div class="separator w-100"></div>
            
            <div class="isi h-100 d-flex align-items-center">
                <span>{{ $jmlPembayaran }}</span>
            </div>
        </div>
        {{-- <div class="designL col"></div>
        <div class="designR col"></div> --}}
    </div>

    <div class="data-menu position-relative">
        <div class="dash-data position-absolute h-100">
            <div class="judul">
                <span class="text-neutral-90 text-m-medium">Total Pembayaran</span>
            </div>
    
            <div class="separator w-100"></div>
            
            <div class="isi h-100 d-flex align-items-center">
                <span>Rp. {{ number_format($total) }}</span>
            </div>
        </div>
        {{-- <div class="designL col"></div>
        <div class="designR col"></div> --}}
    </div>
</div>