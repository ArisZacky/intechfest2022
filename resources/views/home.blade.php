<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/favicon/favicon-32x32.png" sizes="32x32" />
    <title>Intechfest 2022</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('css') }}/index.css">
    <link rel="stylesheet" href="{{ asset('css') }}/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@lastest/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@lastest/dist/css/splide.min.css">
</head>

<body id="home">
    <!-- NAVBAR START -->
    <nav class="primary-bgr">
        <img src="{{ asset('assets') }}/logo/IF DARK MODE.png" alt="Logo">
        <div class="nav-menu">
            <div class="nav-items">
                <a href="#home" class="primary-link">Beranda</a>
                <a href="#tentang" class="primary-link">Tentang</a>
                <a href="#lomba" class="primary-link">Lomba</a>
                <a href="#chilltalks" class="primary-link">ChillTalks</a>
                <!-- <a href="#" class="primary-link">Link</a> -->
            </div>
            <a href="{{ route('login') }}" class="primary-button">Login Disini</a>
        </div>
        <div class="nav-toggle">
            <input type="checkbox">
            <div>
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->
    <section class="hero" id="hero">
        <div class="hero-content">
            <h1><b>Intech</b><span>fest</span></h1>
            <p>Information and Technology Festival merupakan brand kegiatan terbesar yang dimiliki oleh Unit Kegiatan
                Computer Club
                Politeknik Negeri Bali yang dilaksanakan setiap 1 (satu) tahun sekali.</p>
            <a class="primary-button" href="https://docs.google.com/forms/d/e/1FAIpQLSfQHOoZ-xwKvZPNDmLSBv8b0ydG_ql_AYGERiD8mabz_JGzrA/viewform?usp=sf_link">Daftar Sekarang</a>
        </div>
    </section>
    <div id="tentang"><br><br><br></div>
    <section class="about">
        <h1>Tentang Intechfest</h1>
        <div class="about-box">
            <p>Kegiatan INTECH FEST 2022 mengangkat tema <i>“Creating an Advanced Future”</i>
                yang
                terdiri dari dua
                jenis kegiatan yaitu kompetisi untuk tingkat perguruan tinggi serta
                Webinar Nasional.</p>
            <div class="about-image">
                <img src="{{ asset('assets') }}/IllustrationOnly/about.png" alt="">
            </div>
        </div>
    </section>
    <div id="chilltalks"><br><br><br></div>
    <section class="webinar" id="webinar">
        <div class="webinar-image">
            <img src="{{ asset('assets') }}/IllustrationOnly/WebinarIntechfest.png" alt="">
        </div>
        <div class="webinar-info">
            <h1>ChillTalks Intechfest</h1>
            <p>ChillTalks Intechfest
                Merupakan Kegiatan Seminar atau Webinar Nasional yang dimana pada tahun ini mengangkat topik
                Technopreneurship dan Data
                Security.</p>
            <div class="webinar-buttons">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfQHOoZ-xwKvZPNDmLSBv8b0ydG_ql_AYGERiD8mabz_JGzrA/viewform?usp=sf_link" class="primary-button">Daftar ChillTalks</a>
                <!-- <a href="#" class="primary-button secondary-button webinar-button">Detail
                    ChillTalks</a> -->
            </div>
        </div>
    </section>
    <div id="lomba"><br><br><br></div>
    <section class="lomba" id="lomba">
        <h1>Cabang Lomba</h1>
        <div class="lomba-box">
            <div class="lomba-content">
                <div class="lomba-image">
                    <img src="{{ asset('assets') }}/IllustrationOnly/WDC.png" alt="">
                </div>
                <h2>PNBWDC</h2>
                <p>Politeknik Negeri Bali Web Design Competition (PNBWDC) Merupakan salah satu sub event perlombaan
                    dalam kegiatan
                    “Information and Technology Festival (Intech Fest) 2022”. Yang dimana kegiatan ini berfokus dalam
                    merancang serta
                    membuat sebuah website yang memiliki peran sangat penting di era modern ini.</p>
                <div class="lomba-buttons">
                    <a href="{{ route('register') }}" class="primary-button">Daftar</a>
                    <a href="{{ url('/pnbwdc') }}" class="primary-button secondary-button lomba-button pnbwdc">Detail Lomba</a>
                </div>
            </div>
            <div class="lomba-content">
                <div class="lomba-image">
                    <img src="{{ asset('assets') }}/IllustrationOnly/CD.png" alt="">
                </div>
                <h2>PNBDC</h2>
                <p>Politeknik Negeri Bali Design Challenge (PNBDC) Merupakan salah satu sub event perlombaan dalam
                    kegiatan “Information
                    and Technology Festival (Intech Fest) 2022”. Kegiatan ini akan berfokus dalam pembuatan sebuah
                    desain UI/UX serta
                    penyelesain suatu masalah yang nantinya akan dituangkan dalam sebuah desain.</p>
                <div class="lomba-buttons">
                    <a href="{{ route('register') }}" class="primary-button">Daftar</a>
                    <a href="{{ url('/pnbdc') }}" class="primary-button secondary-button lomba-button">Detail
                        Lomba</a>
                </div>
            </div>
            <div class="lomba-content">
                <div class="lomba-image">
                    <img src="{{ asset('assets') }}/IllustrationOnly/WDC.png" alt="">
                </div>
                <h2>PNBCTF</h2>
                <p>Politeknik Negeri Bali Capture The Flags (PNBCTF) Merupakan salah satu sub event perlombaan dalam
                    kegiatan “Information
                    and Technology Festival (Intech Fest) 2022”. Kegiatan ini akan berfokus dalam mencermati permasalahan
                    keamanan jaringan,
                    keamanan komputer, dan keamanan informasi.</p>
                <div class="lomba-buttons">
                    <a href="{{ route('register') }}" class="primary-button">Daftar</a>
                    <a href="{{ url('/pnbctf') }}" class="primary-button secondary-button lomba-button pnbwdc">Detail Lomba</a>
                </div>
            </div>
        </div>
    </section>
    <section class="timeline">
        <h1>Tahapan Perlombaan</h1>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita facilis soluta recusandae laboriosam
            laborum esse, atque corporis! Quos, laudantium illum facere ea id laboriosam rem culpa maiores! Sit, ipsa
            facilis?</p> --> <br>
        <ul class="timeline-line">
            <!-- <li class="timeline-item">
                <div>
                    <p>tanggal</p>
                    <p><b>Pendaftaran</b></p>
                </div>
            </li> -->
            <li class="timeline-item">
                <div>
                    <p>18/8/2022</p>
                    <p><b>Technical Meeting</b></p>
                </div>
            </li>
            <li class="timeline-item">
                <div>
                    <p>18/9/2022</p>
                    <p><b>Penyisihan Peserta</b></p>
                </div>
            </li>
            <li class="timeline-item">
                <div>
                    <p>27/9/2022</p>
                    <p><b>Pembukaan Intechfest 2022 & Final PNBWDC</b></p>
                </div>
            </li>
            <li class="timeline-item">
                <div>
                    <p>28/9/2022</p>
                    <p><b>Final PNBDC, ChillTalks, Pengumuman juara & Penutupan Intechfest 2022</b></p>
                </div>
            </li>
        </ul>
    </section>
    <section class="affirmation primary-bgr">
        <div class="affirmation-image">
            <img src="{{ asset('assets') }}/IllustrationOnly/TungguApaLagi.png" alt="">
        </div>
        <div class="affirmation-content">
            <h1>Tunggu Apalagi?</h1>
            <p>Yuk ikutan! Ketahui batasanmu dan lewati disini! <strong>To The Next Level!</strong></p>
            <a href="{{ route('register') }}" class="primary-button">Daftar Sekarang</a>
        </div>
    </section>
    <section class="faq"><br><br>
        <h1 style="text-align: center;">FAQ</h1>
            <div id="accordion" class="accordionContainer">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Media apa yang akan digunakan saat lomba?
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Media online, untuk software dan metode yang digunakan sebagian besar bebas namun akan dibahas
                        lebih lanjut saat TM
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Jika pemenang lomba nanti berada diluar daerah,
                            bagaimana cara penyampaian hadiahnya?
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Jika peserta berada diluar daerah maka hadiah akan ditransfer menggunakan rekening dari panitia
                        Intech Fest 2022
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Bagaimana cara pendaftarannya? Apakah ada formulir yang
                            harus diisi?
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Pendaftaran akan melalui website official Intech Fest 2022
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Apa saja kriteria penilaiannya?
                        </a>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        Kriteria penilaian akan diberitahu saat Technical Meeting
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Apakah ada juara favorit di kedua lomba? kalau ada media
                            apa yang digunakan untuk voting
                        </a>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        Tidak ada juara favorit
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Apakah ada kompensasi waktu untuk tim yang mengalami
                            masalah jaringan internet pada saat presentasi? berapa lama?
                        </a>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        Untuk presentasi bisa disesuaikan dengan berapa tim yang masuk final dan melakukan presentasi. 
                        Mungkin kurang lebih 3 - 5 menit. Jika ada penampilan prototype di PNBDC mungkin bisa 5 menit atau kurang. 
                        Tergantung lagi dengan jumlah peserta dan durasi presentasi
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Apakah Webinar/Chilltalks dibuka untuk umum?
                        </a>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        Webinar/Chilltalks dengan topik technopreneurship dan data security dibuka untuk UMUM
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight">
                        <a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Berapa harga pendaftaran webinar?
                        </a>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                    <div class="card-body">
                    Hanya 15k
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine">
                        <a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Benefit dari webinar intech?
                        </a>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                    <div class="card-body">
                        - E-sertifikat <br> - Ilmu bermanfaat <br> - Relasi <br> - Inventasi leher keatas
                    </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="splide" aria-labelledby="carousel-heading">
        <h1 id="carousel-heading">Sponsorships</h1>
        <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><img style="width: 150px" src="{{ asset('assets') }}/logo/sponsor/dewaweb-chp-square-logo-rgb.png"></li>
                    <li class="splide__slide"><img style="width: 150px" src="{{ asset('assets') }}/logo/sponsor/dewaweb-chp-square-logo-rgb.png"></li>
                    <li class="splide__slide"><img style="width: 150px" src="{{ asset('assets') }}/logo/sponsor/dewaweb-chp-square-logo-rgb.png"></li>
                    <li class="splide__slide"><img style="width: 150px" src="{{ asset('assets') }}/logo/sponsor/dewaweb-chp-square-logo-rgb.png"></li>
                    <li class="splide__slide"><img style="width: 150px" src="{{ asset('assets') }}/logo/sponsor/dewaweb-chp-square-logo-rgb.png"></li>
                    <li class="splide__slide"><img style="width: 150px" src="{{ asset('assets') }}/logo/sponsor/dewaweb-chp-square-logo-rgb.png"></li>
                    <li class="splide__slide"><img style="width: 150px" src="{{ asset('assets') }}/logo/sponsor/dewaweb-chp-square-logo-rgb.png"></li>
                    <li class="splide__slide"><img style="width: 150px" src="{{ asset('assets') }}/logo/sponsor/dewaweb-chp-square-logo-rgb.png"></li>
                </ul>
        </div>
    </section>

    <section class="sponsorships">
        <h1>Sponsorships</h1>
        <ul class="sponsorships-box">
            <li><img src="{{ asset('assets') }}/logo/sponsor/dewaweb-chp-square-logo-rgb.png"></li>
            <li><img src="{{ asset('assets') }}/logo/sponsor/LogoMagendra.png"></li>
            <li><img src="{{ asset('assets') }}/logo/sponsor/LOGOBIZNET.jpeg" style="zoom:1.5"></li>
        </ul>
    </section>
    <section class="footer primary-bgr">
        <img src="{{ asset('assets') }}/logo/Logotype Dark Mode.png" alt="">
        <ul class="footer-info group-1">
            <li>Informasi</li>
            <li><i class="fa fa-envelope"></i>
                <p>intechfestcc@gmail.com</p>
            </li>
            <li><i class="fa fa-building"></i>
                <p>Kampus Bukit, Jimbaran, South Kuta, Badung Regency, Bali 80364</p>
            </li>
            <li><i class="fa fa-phone"></i>
                <p><a href="https://api.whatsapp.com/send/?phone=%2B628980281616&text&app_absent=0" target="_blank" class="contactPerson">62 898-0281-616 </a>(Ferlyn)</p>
            </li>
            <li><i class="fa fa-phone"></i>
                <p><a href="https://api.whatsapp.com/send/?phone=%2B6289680321813&text&app_absent=0" target="_blank" class="contactPerson">62 896-8032-1813 </a>(Diva)</p>
            </li>
        </ul>
        <!-- <ul class="footer-info group-2">
            <li>Informasi</li>
            <li><a href="#">Coming Sonn...</a></li>
            <li><a href="#">Coming Sonn...</a></li>
            <li><a href="#">Coming Sonn...</a></li>
        </ul> -->
        <div class="footer-box">
            <h3>Social Media</h3>
            <div>
                <a href="https://instagram.com/ukmcomputerclub?utm_medium=copy_link" rel="noopener noreferrer" target="_blank"><i class="fa fa-instagram"> </i><span>@ukmcomputerclub</span></a>
                <a href="https://instagram.com/intechfest.cc?utm_medium=copy_link" rel="noopener noreferrer" target="_blank"><i class="fa fa-instagram"></i><span>@intechfest.cc</span></a>
                <a href="https://instagram.com/pnbwdc?utm_medium=copy_link" rel="noopener noreferrer" target="_blank"><i class="fa fa-instagram"></i><span>@pnbwdc</span></a>
                <a href="https://instagram.com/pnb_dc?utm_medium=copy_link" rel="noopener noreferrer" target="_blank"><i class="fa fa-instagram"></i><span>@pnb_dc</span></a>
            </div>
            <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, ullam?</p>
            <a href="#" class="primary-button">IG Intechfest</a>
            <a href="#" class="primary-button footer-button">Whatsapp</a> -->

        </div>
    </section>
    <div style="background-color: var(--grey); height: 30px;"></div>
    <script src="{{ asset('js') }}/script.js"></script>
    <script src="{{ asset('js') }}/splide.min.js"></script>
    <script>
        var splide = new Splide( '.splide', {
        type: 'loop',
        autoplay: true,
        perPage: 5,
        perMove: 1,
        interval: 3000,
        arrows: false,
        pagination: false,
        gap: '10rem',
        breakpoints: {
            1024: {
              perPage: 3,
            },
            640: {
              perPage: 2,
        
            },
          },
        
        // rewind : true,
        } );
        splide.mount();
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>