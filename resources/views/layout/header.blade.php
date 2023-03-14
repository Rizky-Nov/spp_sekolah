
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">

    @if (Request::is('home'))
        <div class="col header">
            <div class="">
                <a href="/logout">Keluar</a>
            </div>
        </div>
    @else
        <div class="col-12" style="height: 80px">
            <div class="col">
                
            </div>

            <div class="col header">
                <div class="">
                    <a href="/logout">Keluar</a>
                </div>
            </div>
        </div>
    @endif