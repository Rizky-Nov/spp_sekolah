
    <link rel="stylesheet" href="{{ asset('css/side-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

<div class="col-2 sidebar-luar position-fixed">
    <div class="sidebar w-100 h-100">
        <div class="logo">

        </div>

        <div class="separator"></div>

        <div class="menus-luar">
            <div class="menu-menu d-flex" style="gap: 12px;">
                <a href="/home" class="w-100 text-decoration-none text-m-medium text-neutral-10 cursor-pointer">Dashboard</a>
            </div>

            <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                <div class="d-flex flex-column w-100">
                    <div class="w-100 bg-warning cursor-pointer" data-bs-toggle="collapse" data-bs-target="#data-data">
                        <span class="text-neutral-10 text-m-medium">Data - Data</span>
                    </div>

                    <div class="collapse w-100" id="data-data" {{ Request::is('data-siswa') || Request::is('data-petugas') ? 'show' : '' }}>
                    
                        <a href="/data-siswa">
                            <span class="text-m-regular text-neutral-10">Data Siswa</span>
                        </a>
                        
                        <a href="/data-petugas">
                            <span class="text-m-regular text-neutral-10">Data Kelas</span>
                        </a>
                        
                        <a href="#">
                            <span class="text-m-regular text-neutral-10">Data Petugas</span>
                        </a>
                        
                        <a href="#">
                            <span class="text-m-regular text-neutral-10">Data SPP</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                <div class="d-flex">
                    <a class="text-m-medium text-decoration-none text-neutral-10 cursor-pointer">Transaksi</a>
                </div>
            </div>

            <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                <div class="d-flex">
                    <a class="text-m-medium text-decoration-none text-neutral-10 cursor-pointer">Catatan</a>
                </div>
            </div>

            <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                <div class="d-flex">
                    <a class="text-m-medium text-decoration-none text-neutral-10 cursor-pointer">Laporan</a>
                </div>
            </div>

            {{-- <div class="flex-column w-100" style="position: relative;">
                <a class="text-m-medium text-neutral-10 w-100 cursor-pointer" style="gap: 8px;" data-bs-toggle="collapse" data-bs-target="#dropdown-menu">
                    <img src="{{ asset('icon/list-1.png') }}" class="icon">
                    <span class="w-50">Data Absensi</span>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </a>

                <div class="w-100 collapse {{ Request::is('absen-harian') || Request::is('absen-bulanan') ? 'show' : '' }}" id="dropdown-menu">
                        <a href="/absen-harian" 
                        class="text-m-regular text-neutral-10 {{ Request::is('absen-harian') ? 'active' : '' }}" 
                        style="margin-top: 12px; padding-left: 56px">Absen Hari Ini</a>
                        
                        <a href="/absen-bulanan" 
                        class="text-m-regular text-neutral-10 {{ Request::is('absen-bulanan') ? 'active' : '' }}" 
                        style="margin-top: 12px; padding-left: 56px">Absensi</a>
                </div>  
            </div> --}}

        </div>
    </div>
</div>