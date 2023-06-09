
    <link rel="stylesheet" href="{{ asset('css/side-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    
    @if (Auth::guard('siswa')->check())
    <div class="col-2 sidebar-luar position-fixed">
        <div class="sidebar-dalam w-100 h-100">
            <div class="logo">
    
            </div>
    
            <div class="px-3">
                <div class="separator w-100"></div>
            </div>
    
            <div class="menus-luar">
                <div class="menu-menu d-flex" style="gap: 12px;">
                    <div class="d-flex w-100">
                        <div class="w-100 data-menuutama cursor-pointer {{ Request::is('home') ? 'active' : '' }}">
                            <div class="d-flex w-100 cursor-pointer" style="gap: 12px;">
                                <img src="{{ asset('icons/home.png') }}" alt="" style="width: 20px; height: 20px;">

                                <a href="/home" class="text-neutral-10 text-m-medium w-100
                                text-decoration-none">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                    <div class="d-flex flex-column w-100">
                        <div class="w-100 data-menuutama cursor-pointer" data-bs-toggle="collapse" data-bs-target="#catatan">
                            <div class="d-flex w-100" style="gap: 12px">
                                <img src="{{ asset('icons/history.png') }}" alt="" style="width: 20px; height: 20px;">
                                <span class="text-neutral-10 text-m-medium">Catatan</span>
                            </div>
                        </div>
    
                        <div class="collapse w-100 {{ Request::is('histori')  ? 'show' : '' }}" id="catatan">
                            <div class="data-sidemenu d-flex flex-column" style="padding-left: 24px">
                                <a href="/histori" class="text-decoration-none {{ Request::is('histori') ? 'active' : '' }}">
                                    <span class="text-m-regular text-neutral-10">History Pembayaran</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @else
        @if (Auth::guard('petugas')->user()->level->level == 'admin')
            <div class="col-2 sidebar-luar position-fixed">
                <div class="sidebar-dalam w-100 h-100">
                    <div class="logo">
            
                    </div>
            
                    <div class="px-3">
                        <div class="separator w-100"></div>
                    </div>
            
                    <div class="menus-luar">
                        <div class="menu-menu w-100 d-flex">
                            <div class="d-flex w-100">
                                <div class="w-100 data-menuutama cursor-pointer {{ Request::is('home') ? 'active' : '' }}">
                                    <div class="d-flex" style="gap: 12px;">
                                        <img src="{{ asset('icons/home.png') }}" alt="" style="width: 20px; height: 20px;">
                                        
                                        <a href="/home" class="text-neutral-10 text-m-medium w-100
                                        text-decoration-none">Dashboard</a>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                            <div class="d-flex flex-column w-100">
                                <div class="w-100 data-menuutama cursor-pointer" data-bs-toggle="collapse" data-bs-target="#data-data">
                                    <div class="d-flex w-100" style="gap: 12px">
                                        <img src="{{ asset('icons/data.png') }}" alt="" style="width: 20px; height: 20px;">
                                        <span class="text-neutral-10 text-m-medium">Data - Data</span>
                                    </div>
                                </div>
            
                                <div class="collapse w-100 {{ Request::is('data-siswa') || Request::is('data-petugas') || Request::is('data-kelas') || Request::is('data-spp')  ? 'show' : '' }}" id="data-data">
                                    <div class="data-sidemenu d-flex flex-column" style="padding-left: 36px">
                                        <a href="/data-siswa" class="text-decoration-none {{ Request::is('data-siswa') ? 'active' : '' }}">
                                            <span class="text-m-regular text-neutral-10">Data Siswa</span>
                                        </a>
                                        
                                        <a href="/data-kelas" class="text-decoration-none {{ Request::is('data-kelas') ? 'active' : '' }}">
                                            <span class="text-m-regular text-neutral-10">Data Kelas</span>
                                        </a>
                                        
                                        <a href="/data-petugas" class="text-decoration-none {{ Request::is('data-petugas') ? 'active' : '' }}">
                                            <span class="text-m-regular text-neutral-10">Data Petugas</span>
                                        </a>
                                        
                                        <a href="/data-spp" class="text-decoration-none {{ Request::is('data-spp') ? 'active' : '' }}">
                                            <span class="text-m-regular text-neutral-10">Data SPP</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                            <div class="d-flex flex-column w-100">
                                <div class="w-100 data-menuutama cursor-pointer" data-bs-toggle="collapse" data-bs-target="#pembayaran">
                                    <div class="d-flex w-100" style="gap: 12px" >
                                        <img src="{{ asset('icons/transaction.png') }}" alt="" style="width: 20px; height: 20px;">
                                        <span class="text-neutral-10 text-m-medium">Transaksi</span>
                                    </div>
                                </div>
            
                                <div class="collapse w-100 {{ Request::is('pembayaran')  ? 'show' : '' }}" id="pembayaran">
                                    <div class="data-sidemenu d-flex flex-column" style="padding-left: 24px">
                                        <a href="/pembayaran" class="text-decoration-none {{ Request::is('pembayaran') ? 'active' : '' }}">
                                            <span class="text-m-regular text-neutral-10">Pembayaran</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                            <div class="d-flex flex-column w-100">
                                <div class="w-100 data-menuutama cursor-pointer" data-bs-toggle="collapse" data-bs-target="#catatan">
                                    <div class="d-flex w-100" style="gap: 12px">
                                        <img src="{{ asset('icons/history.png') }}" alt="" style="width: 20px; height: 20px;">
                                        <span class="text-neutral-10 text-m-medium">Catatan</span>
                                    </div>
                                </div>
            
                                <div class="collapse w-100 {{ Request::is('histori')  ? 'show' : '' }}" id="catatan">
                                    <div class="data-sidemenu d-flex flex-column" style="padding-left: 24px">
                                        <a href="/histori" class="text-decoration-none {{ Request::is('histori') ? 'active' : '' }}">
                                            <span class="text-m-regular text-neutral-10">History Pembayaran</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                            <div class="d-flex flex-column w-100">
                                <div class="w-100 data-menuutama cursor-pointer" data-bs-toggle="collapse" data-bs-target="#laporan">
                                    <div class="d-flex w-100" style="gap: 12px">
                                        <img src="{{ asset('icons/laporan.png') }}" alt="" style="width: 20px; height: 20px;">
                                        <span class="text-neutral-10 text-m-medium">Laporan</span>
                                    </div>
                                </div>
            
                                <div class="collapse w-100 {{ Request::is('cetak-laporan')  ? 'show' : '' }}" id="laporan">
                                    <div class="data-sidemenu d-flex flex-column" style="padding-left: 24px">
                                        <a href="cetak-laporan" class="text-decoration-none {{ Request::is('cetak-laporan') ? 'active' : '' }}">
                                            <span class="text-m-regular text-neutral-10">Cetak Laporan Pembayaran</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @elseif (Auth::guard('petugas')->user()->level->level == 'petugas')
        <div class="col-2 sidebar-luar position-fixed">
            <div class="sidebar-dalam w-100 h-100">
                <div class="logo">
        
                </div>
        
                <div class="px-3">
                    <div class="separator w-100"></div>
                </div>
        
                <div class="menus-luar">
                    <div class="menu-menu d-flex" style="gap: 12px;">
                        <div class="d-flex w-100">
                            <div class="w-100 data-menuutama cursor-pointer {{ Request::is('home') ? 'active' : '' }}">
                                <div class="d-flex" style="gap: 12px;">
                                    <img src="{{ asset('icons/home.png') }}" alt="" style="width: 20px; height: 20px;">
                                    
                                    <a href="/home" class="text-neutral-10 text-m-medium w-100
                                    text-decoration-none">Dashboard</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                        <div class="d-flex flex-column w-100">
                            <div class="w-100 data-menuutama cursor-pointer" data-bs-toggle="collapse" data-bs-target="#pembayaran">
                                <div class="d-flex w-100" style="gap: 12px" >
                                    <img src="{{ asset('icons/transaction.png') }}" alt="" style="width: 20px; height: 20px;">
                                    <span class="text-neutral-10 text-m-medium">Transaksi</span>
                                </div>
                            </div>
        
                            <div class="collapse w-100 {{ Request::is('pembayaran')  ? 'show' : '' }}" id="pembayaran">
                                <div class="data-sidemenu d-flex flex-column" style="padding-left: 24px">
                                    <a href="/pembayaran" class="text-decoration-none {{ Request::is('pembayaran') ? 'active' : '' }}">
                                        <span class="text-m-regular text-neutral-10">Pembayaran</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                        <div class="d-flex flex-column w-100">
                            <div class="w-100 data-menuutama cursor-pointer" data-bs-toggle="collapse" data-bs-target="#catatan">
                                <div class="d-flex w-100" style="gap: 12px">
                                    <img src="{{ asset('icons/history.png') }}" alt="" style="width: 20px; height: 20px;">
                                    <span class="text-neutral-10 text-m-medium">Catatan</span>
                                </div>
                            </div>
        
                            <div class="collapse w-100 {{ Request::is('histori')  ? 'show' : '' }}" id="catatan">
                                <div class="data-sidemenu d-flex flex-column" style="padding-left: 24px">
                                    <a href="/histori" class="text-decoration-none {{ Request::is('histori') ? 'active' : '' }}">
                                        <span class="text-m-regular text-neutral-10">History Pembayaran</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endif
    @endif
