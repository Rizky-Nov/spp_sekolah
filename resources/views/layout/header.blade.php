
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">

    @if (Request::is('home'))
        <div class="col header">
            <div class="">
                <a href="/logout">Keluar</a>
            </div>
        </div>
    @else
        <div class="col-12 d-flex" style="height: 80px">
            <div class="col d-flex align-items-end" style="padding-left: 82px; gap: 12px">
                <span class="text-neutral-10 header-m">
                    @yield('header1')
                </span>

                <span class="text-neutral-10 text-l-medium">
                    @yield('header')
                </span>
            </div>

            <div class="col header">
                <div class="">
                    <a href="/logout">Keluar</a>
                </div>
            </div>
        </div>
    @endif