<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>
    {{-- @extends('name') --}}

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Buat Akun</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>gunakan E-mail yang aktif !</span>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button>Register</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Masuk Dashboard</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button>Login</button>
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
    <script type="text/javascript" src="{{ URL::asset('js/login.js') }}"></script>
</body>

</html>