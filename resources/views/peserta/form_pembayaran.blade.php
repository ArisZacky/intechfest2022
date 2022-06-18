<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Intechfest 2021</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css') }}/index.css">
</head>

<body>
    <section class="daftar" style="background-size: auto;background-repeat: repeat-x;background-position: center">
        <div action="" class="daftar-box">
            <img src="{{ asset('assets') }}/logo/Logotype Dark Mode.png" alt="">
            <h1>Form Konfirmasi Pendaftaran</h1>
            <form action="{{ route('peserta.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="ktm_kts_ktp" id="foto" class="border-none">
                <input type="submit" value="Daftar" name="submit" class="primary-button">
            </form>
            <a href="/peserta" class="primary-link">Kembali</a>
        </div>
    </section>
</body>

</html>