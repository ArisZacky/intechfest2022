<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('assets') }}/logo/INTECH FEST.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <section class="dashboard">
        <div class="dashboard-menu">
            <span><i class="fa fa-bars"></i></span>
            <img class="dashboard-logo" src="{{ asset('assets') }}/logo/Logotype Light Mode.png" alt="Logo">
            <div class="dashboard-items">
                @if (Auth::user()->status !='sudah daftar')
                   <a href="/peserta" @if($data == 'pnbwdc') class="d-active" @endif>
                    <img src="{{ asset('assets') }}/logo/WDC/Logo Ligth Mode.png" alt="" icon>
                    <p>PNBWDC</p>
                    </a>
                    <a href="/pesertaPNBDC" @if($data == 'pnbdc') class="d-active" @endif>
                        <img src="{{ asset('assets') }}/logo/DC/Logo Light Mode.png" alt="" icon>
                        <p>PNBDC</p>
                    </a>
                    <a href="/pesertaPNBCTF" @if($data == 'pnbctf') class="d-active" @endif>
                        <img src="{{ asset('assets') }}/logo/INTECH FEST.png" alt="" icon>
                        <p>PNBCTF</p>
                    </a>
                @else
                    <a href="#" class="d-active">
                        <img src="{{ asset('assets') }}/logo/INTECH FEST.png" alt="" icon>
                        <p>Pembayaran</p>
                    </a>
                    @if ($status == 'diterima')
                        @if ($regisuser->competition_id == 3 && $status_pnbdcprojects == null)
                            <a href="/UploadProject">
                                <img src="{{ asset('assets') }}/logo/DC/Logo Light Mode.png" alt="" icon>
                                <p>Upload Project Pnbdc</p>
                            </a>
                        @endif
                    @endif
                @endif
                @if (Auth::user()->status !='sudah daftar')
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfQHOoZ-xwKvZPNDmLSBv8b0ydG_ql_AYGERiD8mabz_JGzrA/viewform?usp=sf_link">
                    <img src="{{ asset('assets') }}/logo/INTECH FEST.png" alt="" icon>
                    <p>ChillTalks</p>
                </a>
                @endif
            </div>
        </div>
        <div class="dashboard-box">
            <div class="dashboard-ribbon">
                <button><i class="fa fa-user"></i></button>
                <ul class="dashboard-user">
                    <li>
                        {{ Auth::user()->email }}
                    </li>
                    <li>
                        <li>
                            <a href="GantiPassword"><button>Ganti Password</button></a>
                        </li>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <input type="submit" value="Logout" name="logout">
                        </form>
                    </li>
                </ul>
            </div>
            <div class="dashboard-content">
                @yield('content')
            </div>
        </div>
    </section>
    <script src="{{ asset('js/dashScript.js') }}"></script>
</body>

</html>