
    <link rel="stylesheet" href="{{ asset('css/side-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<div class="col-2 sidebar-luar">
    <div class="sidebar w-100 h-100">
        <div class="logo">

        </div>

        <div class="separator"></div>

        <div class="menus-luar">
            <div class="menu-menu d-flex" style="gap: 12px;">
                <a href="#" class="text-m-medium text-neutral-10 cursor-pointer">Dashboard</a>
            </div>

            <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                <div class="d-flex">
                    <a class="text-m-medium text-neutral-10 cursor-pointer" data-bs-toggle="collapse" data-bs-target="#dropdown-menu">Data Master</a>

                    <div class="collapse" id="dropdown-menu" >
                    {{-- {{ Request::is('data') || Request::is('absen-bulanan') ? 'show' : '' }} --}}
                         
                        {{-- <a href="data">
                            <span class="text-m-regular text-neutral-10">Data Siswa</span>
                        </a>
                        
                        <a href="#">
                            <span class="text-m-regular text-neutral-10">Data Kelas</span>
                        </a>
                        
                        <a href="#">
                            <span class="text-m-regular text-neutral-10">Data Petugas</span>
                        </a>
                        
                        <a href="#">
                            <span class="text-m-regular text-neutral-10">Data SPP</span>
                        </a> --}}
                    </div>
                </div>
            </div>
            
            <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                <div class="d-flex">
                    <a class="text-m-medium text-neutral-10 cursor-pointer">Transaksi</a>
                </div>
            </div>

            <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                <div class="d-flex">
                    <a class="text-m-medium text-neutral-10 cursor-pointer">Catatan</a>
                </div>
            </div>

            <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                <div class="d-flex">
                    <a class="text-m-medium text-neutral-10 cursor-pointer">Laporan</a>
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