<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intechfest 2021</title>
    <link rel="stylesheet" href="{{ asset('css') }}/index.css">
    <link rel="shortcut icon" href="{{ asset('assets') }}/favicon/favicon-32x32.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>

    <section class="auth">
        <div class="auth-content">
            <img src="{{ asset('assets') }}/logo/Logotype Dark Mode.png" alt="">
            <h1>Login</h1>
            <form class="auth-box" method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email">E-mail</label>
                <input autofocus="true" name="email" id="email"type="email" :value="old('email')" required autofocus>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required autocomplete="current-password">
                <input class="auth-action" type="submit" value="Login">
                <a href="{{ route('register') }}">Daftar</a>
                <a href="{{ url('/') }}">Home</a>
            </form>
        </div>
        <div class="auth-bgr"></div>
    </section>
    
</body>

@if($errors->has('email'))
<script>
    alert('Email atau password salah!');
    location.href = '/login'
</script>
@endif
</html>