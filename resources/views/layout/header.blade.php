
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    @if (Request::is('home'))
        <div class="col header justify-content-end me-5">
            <a class="text-decoration-none text-white" href="/logout">Log-Out</a>
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