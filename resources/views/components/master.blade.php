<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/data-siswa.css') }}">


    <title>{{ $master }} | SPP</title>
</head>
<body style="background: #FFFFFF">
    <div class="col-12 d-flex position-relative">
        <div class="atas col-12"></div>

        <div class="col-12 d-flex position-absolute" >
            <div class="col-2">
                @include('layout.side-bar')
            </div>

            @if (Request::is('home'))
                <div class="col-10 d-flex flex-column">
                    <div>
                        @include('layout.header')
                    </div>

                    <div class="col" style="margin-top: 14px;">
                        {{ $slot }}
                    </div>
                </div>
            @else
                <div class="col-10 d-flex flex-column" style="padding-top: 36px; padding-bottom: 36px; padding-right: 48px; padding-left: 16px;">
                    <div>
                        @include('layout.header')
                    </div>

                    <div class="col" style="margin-top: 14px;">
                        {{ $slot }}
                    </div>
                </div>
            @endif
        </div>
    </div>
</body>
</html>