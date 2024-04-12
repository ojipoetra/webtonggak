<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/logo.png')}}" type="image/x-icon">
    <title>RSTGH | Login/Register</title>
</head>

<body>
    {{-- @extends('name') --}}

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="{{route('akun.store')}}" method="POST">
                @csrf
                @method('POST')
                <h1>Buat Akun</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>gunakan E-mail yang aktif !</span>
                <input type="text" name="name" placeholder="Name" required autofocus autocomplete="off">
                <input type="email" name="email" placeholder="Email" required autocomplete="off">
                <input type="password" name="password" placeholder="Password" required autocomplete="off" title="Harus terdapat huruf & angka" pattern="^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z0-9]{8,}$">
                {{-- @error('password')
                    <span>{{$message}}</span>
                @enderror --}}
                <button type="submit">Register</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="/akun/create" method="post">
                @csrf
                @method('post')
                <h1>Masuk Dashboard</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <a href="#">Forget Your Password?</a>
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Selamat Datang</h1>
                    <p>Silahka Masukan E-mail dan Password</p>
                    <button class="hidden" id="login">Masuk</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Register Sekarang</h1>
                    <p>Belum Punya Akun !</p>
                    <button class="hidden" id="register">Register</button>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    <script type="text/javascript" src="{{ URL::asset('js/login.js') }}"></script>
</body>

</html>