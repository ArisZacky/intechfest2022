<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/logo/IF NEW2.png" sizes="32x32" />
    <title>Detail PNBCTF</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css') }}/index.css">
</head>

<body>
    <nav style="width: 100%;height: 60px;background-color: var(--grey); display: block; line-height: 35px;">
        <img style="width: 200px;" src="{{ asset('assets') }}/logo/IF NEW TEXT.png" alt="">
    </nav>
    <section class="detail-box">
        <img src="{{ asset('assets') }}/logo/CTF/Logo Type Signature Color.png" alt="">
        <a href="{{ route('register') }}" class="primary-button">Daftar Sekarang</a>
        <a href="https://bit.ly/guidebook_pnbctf" class="primary-button" target="_blank">Download Guidebook</a>
        <div class="detail-content" style="margin-top: 50px">
            <div>
                <h1>Tentang Lomba</h1>
                <br>
                <hr>
                <br>
                <p>Biaya : <br><strong>Rp. 75.000</strong></p>
                <p>Tingkat : <br><strong>Umum (16 - 24 Tahun)</strong></p>
                <br>
                <hr><br>
                <p> PNBCTF (Politeknik Negeri Bali Capture The Flag) merupakan salah satu sub event perlombaan yang pertama kali diadakan dalam kegiatan “Information and Technology Festival (Intech Fest) 2022”. 
                    Kegiatan ini ditujukan untuk khalayak umum dengan ketentuan umur mulai dari 16 sampai 24 tahun. 
                    Dengan diadakannya kompetisi PNBCTF ini diharapkan agar dapat meningkatkan minat dan bakat generasi muda terhadap keamanan dan ancaman siber, 
                    serta meningkatkan kemampuan generasi muda dalam menciptakan keamanan siber dan mencegah berbagai macam ancaman siber seiring berkembangnya informasi dan teknologi.</p>
                    <br><hr><br>
                    <!-- <p><strong>Problem Setters</strong></p> -->
                    <!-- <table class="ctfsetter">
                        <tr>
                            <th class="ctfsetter1">Category</th>
                            <th class="ctfsetter1">Problem Setter</th>
                        </tr>
                        <tr>
                            <td class="ctfsetter2">Digital Forensic</td>
                            <td class="ctfsetter2"><a href="https://github.com/aimardcr">aimardcr</a></td>
                        </tr>
                        <tr>
                            <td class="ctfsetter2">OSINT</td>
                            <td class="ctfsetter2"><a href="https://github.com/aimardcr">aimardcr</a></td>
                        </tr>
                        <tr>
                            <td class="ctfsetter2">RE</td>
                            <td class="ctfsetter2"><a href="https://github.com/aimardcr">aimardcr</a></td>
                        </tr>
                        <tr>
                            <td class="ctfsetter2">Android</td>
                            <td class="ctfsetter2"><a href="https://github.com/aimardcr">aimardcr</a></td>
                        </tr>
                        <tr>
                            <td class="ctfsetter2">Crypto</td>
                            <td class="ctfsetter2"><a href="https://merri.cx/">merricx</a> & <a href="https://github.com/aimardcr">aimardcr</a></td>
                        </tr>
                        <tr>
                            <td class="ctfsetter2">PWN</td>
                            <td class="ctfsetter2"><a href="https://github.com/aimardcr">aimardcr</a></td>
                        </tr>
                        <tr>
                            <td class="ctfsetter2">Web</td>
                            <td class="ctfsetter2"><a href="https://github.com/riordanz">ganezo</a></td>
                        </tr>
                    </table> -->
            </div>
            <img src="{{ asset('assets') }}/IllustrationOnly/ctfilus.png" alt="">
        </div>
        <a href="{{ route('register') }}" class="primary-button">Daftar Sekarang</a>
        <a href="https://bit.ly/guidebook_pnbctf" class="primary-button">Download Guidebook</a>
    </section>
    <a href="{{ url('/') }}" class="detail-back"><strong>Kembali</strong></a>
</body>

</html>