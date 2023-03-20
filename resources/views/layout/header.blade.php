
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    @if (Request::is('home'))
    <div class="navbar navbar-expand-md m-0 px-3 justify-content-between align-items-center mb-4">
        {{-- <span class="header-m ms-3">T.I.P </span> --}}
        <div class="d-flex justify-content-center align-items-center me-3">
            {{-- <span class="text-l-medium me-2">
                @if (Auth::guard('siswa')->check())
                    {{ Auth::guard('siswa')->user()->nama }}
                @else
                    {{ Auth::guard('petugas')->user()->nama_petugas }}                
                @endif
            </span> --}}
            <div class="provider-menu d-flex flex-column position-relative" x-data="{open:false}">
                <span class="img-fluid position-relative" id="menuToggle" x-on:click="open = true">
                    <img src="{{ asset('img/a.jpg') }}" alt=".." class="rounded-4 cursor-pointer" width="35px" height="35px">
                </span>
                <ul class="menu-list" x-show="open" x-transition @click.outside="open  = false">
                    {{-- <li class="menu-item">
                        <a href="/profile" class="text-l-medium text-neutral-90">
                            <i class="fa fa-user me-2" aria-hidden="true"></i>
                            Profile
                        </a>
                    </li> --}}
                    {{-- <li class="menu-dash"></li> --}}
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
                <div class="profile w-100">
                    <div class="d-flex w-100" style="gap: 12px;">
                        <div class="d-flex w-100">
                            <div class="foto-profile cursor-pointer" data-bs-toggle="collapse" data-bs-target="#logout">
                                <span class="text-neutral-90 text-m-regular">P</span>
                            </div>
        
                            <div class="collapse w-100 {{ Request::is('logout')  ? 'show' : '' }}" id="logout">
                                <div class="d-flex align-items-center w-100" style="padding-left: 24px">
                                    <a href="logout" class="text-decoration-none">
                                        <span class="text-m-regular text-neutral-10">Log-Out</span>
                                    </a>
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