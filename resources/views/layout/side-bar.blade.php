
    <link rel="stylesheet" href="{{ asset('css/side-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    
    @if (Auth::guard('siswa')->check())
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
                        <div class="d-flex">
                            <a class="text-m-medium text-decoration-none text-neutral-10 cursor-pointer">Catatan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        @if (Auth::guard('petugas')->user()->level->level == 'admin')
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
                                <div class="w-100 cursor-pointer" data-bs-toggle="collapse" data-bs-target="#data-data">
                                    <span class="text-neutral-10 text-m-medium">Data - Data</span>
                                </div>
            
                                <div class="collapse w-100 {{ Request::is('data-siswa') || Request::is('data-petugas') || Request::is('data-kelas')  ? 'show' : '' }}" id="data-data">
                                    <div class="d-flex flex-column" style="padding-left: 24px">
                                        <a href="/data-siswa" class="text-decoration-none">
                                            <span class="text-m-regular text-neutral-10">Data Siswa</span>
                                        </a>
                                        
                                        <a href="/data-kelas" class="text-decoration-none">
                                            <span class="text-m-regular text-neutral-10">Data Kelas</span>
                                        </a>
                                        
                                        <a href="/data-petugas" class="text-decoration-none">
                                            <span class="text-m-regular text-neutral-10">Data Petugas</span>
                                        </a>
                                        
                                        <a href="#" class="text-decoration-none">
                                            <span class="text-m-regular text-neutral-10">Data SPP</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="menu-menu d-flex flex-column" style="gap: 12px;">
                            <div class="d-flex flex-column w-100">
                                <div class="w-100 cursor-pointer" data-bs-toggle="collapse" data-bs-target="#pembayaran">
                                    <span class="text-neutral-10 text-m-medium">Transaksi</span>
                                </div>
            
                                <div class="collapse w-100 {{ Request::is('pembayaran')  ? 'show' : '' }}" id="pembayaran">
                                    <div class="d-flex flex-column" style="padding-left: 24px">
                                        <a href="/pembayaran" class="text-decoration-none">
                                            <span class="text-m-regular text-neutral-10">Pembayaran</span>
                                        </a>
                                    </div>
                                </div>
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
                    </div>
                </div>
            </div>
        @elseif (Auth::guard('petugas')->user()->level->level == 'petugas')
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
                            <div class="d-flex">
                                <a class="text-m-medium text-decoration-none text-neutral-10 cursor-pointer">Transaksi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
