<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/side-bar.css') }}">

    <title>Login | SPP</title>
</head>
<body style="background: #FFFFFF; padding: 0px">
    <div class="col-12 d-flex align-items-center">
        <div class="col-12 position-absolute d-flex align-items-center justify-content-end">
            <div class="col-6 h-100 w-50"></div>

            <div class="col-6 h-100">
                <div class="col-10 h-100">
                    <div class="form-login">
                        <div class="w-100 d-flex flex-column align-items-center">
                            <span class="header-m text-neutral-80">Login</span>
                            <span class="text-s-medium text-neutral-60">harap login dengan benar, sesuai ketentuan !</span>
                        </div>

                        <form action="/loginAksi" method="POST" class="w-100 d-flex flex-column" style="gap: 18px">
                            @csrf

                            <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" name="username" id="username" class="form-control" placeholder="masukkan username anda">
                            </div>

                            
                            <div class="form-group">
                              <label for="password">Password</label>
                              <input type="text" name="password" id="password" class="form-control" placeholder="masukkan password anda">
                            </div>
                            
                            <div class="separator w-100"></div>

                            <div class="w-100 d-flex flex-column" style="gap: 8px">
                                <button type="submit" class="w-100 button">Login</button>
                            </div>

                            {{-- <span class="text-s-medium text-neutral-90">Jika Belum Punya Akun Silahkan Buat !! <a href="#">Sign-Up</a></span> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-7 kiri-login"></div>
        <div class="col-5" style="height: 100vh;"></div>
    </div>
</body>
</html>