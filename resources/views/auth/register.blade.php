<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intechfest 2021</title>
    <link rel="stylesheet" href="{{ asset('css') }}/index.css">
    <link rel="shortcut icon" href="{{ asset('assets') }}/favicon/favicon-32x32.png">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <form class="auth-box" method="POST" action="{{ route('register') }}">
            @csrf
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" :value="old('email')" required>
            <label for="password">Password</label>
            <input id="password" type="password"name="password" required autocomplete="new-password">
            <label for="repassword">Re-Password</label>
            <input id="repassword" type="password" name="password_confirmation" required>
            <input class="auth-action" type="submit" value="Daftar Sekarang">
            <input type="hidden" name="status" value="belum regis">
            <input type="hidden" name="level" value="peserta">
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ url('/') }}">Home</a>
            </form>
        </div>
        <div class="auth-bgr"></div>
    </section>
</body>

@foreach ($errors->all() as $message)
@php
    echo "<script>
            alert('$message');
            location.href = '/register'
        </script>"   
@endphp
@endforeach
</html>