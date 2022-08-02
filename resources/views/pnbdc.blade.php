<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/logo/IF NEW2.png" sizes="32x32" />
    <title>Detail PNBDC</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css') }}/index.css">
</head>

<body>
    <nav style="width: 100%;height: 60px;background-color: var(--grey); display: block; line-height: 35px;">
        <img style="width: 200px;" src="{{ asset('assets') }}/logo/IF NEW TEXT.png" alt="">
    </nav>
    <section class="detail-box">
        <img src="{{ asset('assets') }}/logo/DC/Logo Type Signature Color.png" alt="">
        <a href="{{ route('register') }}" class="primary-button">Daftar Sekarang</a>
        <a href="https://bit.ly/GuideBookIntechFest2021" class="primary-button">Download Guidebook</a>
        <div class="detail-content">
            <div>
                <h1>Tentang Lomba</h1>
                <br>
                <hr>
                <br>
                <p>Biaya : <br><strong>Rp. 50.000</strong></p>
                <p>Tingkat : <br><strong>Umum (16 - 24 Tahun)</strong></p>
                <br>
                <hr><br>
                <p>Politeknik Negeri Bali Design Chellenge (PNBDC) Merupakan salah satu sub event perlombaan dalam kegiatan “Information and Technology Festival (Intech Fest) 2022”.
                    Kegiatan ini akan berfokus dalam pembuatan sebuah desain UI/UX serta penyelesain suatu masalah yang nantinya akan dituangkan dalam sebuah desain yang menarik. 
                    Kegiatan ini bertujuan agar mampu memberikan penyelesaian masalah-masalah yang sering terjadi disekitar kita
                    dengan output mampu memberikan solusi yang terbaik dan bisa diterapkan dengan bantuan teknologi seperti saat ini. 
                    Kegiatan ini ditujukan untuk Mahasiswa/i perguruan tinggi se-indonesia. 
                    Melalui kegiatan ini, diharapkan bisa berjalan secara kompetitif dan mampu memberikan peningkatan kualitas keterampilan dibidang UI/UX.</p>
            </div>
            <img src="{{ asset('assets') }}/IllustrationOnly/designdc.png" alt="">
        </div>
        <a href="{{ route('register') }}" class="primary-button">Daftar Sekarang</a>
        <a href="https://bit.ly/GuideBookIntechFest2021" class="primary-button">Download Guidebook</a>
    </section>
    <a href="{{ url('/') }}" class="detail-back"><strong>Kembali</strong></a>
</body>

</html>