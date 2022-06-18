<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Intechfest 2021</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="{{ asset('assets') }}/logo/INTECH FEST.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css') }}/index.css">
</head>

<body>
    <section class="daftar">
        <div action="" class="daftar-box">
            <h1>Ganti Password</h1>

            <form action="{{ route('GantiPassword.store') }}" method="POST">
                @csrf
                    <label for="nama">Password Lama</label>
                    <input type="password" name="password_lama" id="passwordlama">
                    @error('password_lama') <p style="color: red;font-size: 13px;margin: -10px 0 20px 0">{{ $message }}</p> @enderror
                    <label for="nama">Password Baru</label>
                    <input type="password" name="password" id="passwordbaru">
                    @error('password') <p style="color: red;font-size: 13px;margin: -10px 0 20px 0">{{ $message }}</p> @enderror
                    <label for="nama">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="konfirmasipassword">
                    @error('password_confirmation') <p style="color: red;font-size: 13px;margin: -10px 0 20px 0">{{ $message }}</p> @enderror
                    <input type="submit" value="Simpan" name="submit" class="primary-button">
            </form>
            <a href="/peserta" class="primary-link">Kembali</a>
        </div>
    </section>
</body>

</html>