
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    @if (Request::is('home'))
        <div class="col-12 d-flex justify-content-end align-items-center">
            <div class="col-2 d-flex justify-content-center align-items-center">
                <div class="navbar navbar-expand-md m-0 px-3 justify-content-center align-items-center mb-4">
                    {{-- <span class="header-m ms-3">T.I.P </span> --}}
                    <div class="d-flex justify-content-center align-items-center me-3 h-100" style="gap: 12px;">
                        <span class="text-l-medium me-2 text-neutral-10 d-flex align-items-center h-100">
                            @if (Auth::guard('siswa')->check())
                                {{ Auth::guard('siswa')->user()->nama }}
                            @else
                                {{ Auth::guard('petugas')->user()->nama_petugas }}                
                            @endif
                        </span>

                        <div class="provider-menu d-flex flex-column position-relative" x-data="{open:false}">
                            <span class="img-fluid position-relative" id="menuToggle" x-on:click="open = true">
                                <img src="{{ asset('icons/home.png') }}" alt=".." class="rounded-4 cursor-pointer" width="20px" height="20px">
                            </span>
                            <ul class="menu-list" x-show="open" x-transition @click.outside="open  = false">
                                <li class="menu-item">
                                    <a href="/logout" class="text-l-medium text-neutral-90">
                                        <i class="fa fa-sign-out me-1" aria-hidden="true"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="col-12 d-flex" style="height: 80px">
            <div class="col-9 d-flex align-items-end" style="padding-left: 82px; gap: 12px">
                <span class="text-neutral-10 header-m">
                    @yield('header1')
                </span>

                <span class="text-neutral-10 text-l-medium">
                    @yield('header')
                </span>
            </div>

            <div class="col header">
                <div class="col-12 d-flex justify-content-end align-items-center">
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <div class="navbar col-12 navbar-expand-md m-0 px-3 justify-content-center align-items-center mb-4">
                            {{-- <span class="header-m ms-3">T.I.P </span> --}}
                            <div class="d-flex justify-content-center align-items-center me-3 h-100 col-12" style="gap: 12px;">
                                <span class="text-l-medium me-2 text-neutral-10 d-flex align-items-center col-12 h-100">
                                    @if (Auth::guard('siswa')->check())
                                        {{ Auth::guard('siswa')->user()->nama }}
                                    @else
                                        {{ Auth::guard('petugas')->user()->nama_petugas }}                
                                    @endif
                                </span>
        
                                <div class="provider-menu d-flex flex-column position-relative" x-data="{open:false}">
                                    <span class="img-fluid position-relative" id="menuToggle" x-on:click="open = true">
                                        <img src="{{ asset('icons/home.png') }}" alt=".." class="rounded-4 cursor-pointer" width="20px" height="20px">
                                    </span>
                                    <ul class="menu-list" x-show="open" x-transition @click.outside="open  = false">
                                        <li class="menu-item">
                                            <a href="/logout" class="text-l-medium text-neutral-90">
                                                <i class="fa fa-sign-out me-1" aria-hidden="true"></i>
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}">
    
    </script>

    <script src="{{ asset('vendor/alpinejs/alpine.min.js') }}">
    
    </script>