<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/favicon/favicon-32x32.png" sizes="32x32" />
    <title>Dashboard | {{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('css') }}/index.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/lightbox.css">
    <script type="text/javascript" src="{{ asset('js') }}/jquery.min.js "></script>
</head>

<body>
    <section class="dashboard">
        @include('layouts.navigation')
        <div class="dashboard-box">
            <div class="dashboard-ribbon">
                <!-- <img src="../assets/logo/INTECH FEST.png" alt="ribbon-1">
                <img src="../assets/logo/INTECH FEST.png" alt="ribbon-2"> -->
                <button><i class="fa fa-user"></i></button>
                <ul class="dashboard-user">
                    <li>
                        {{ Auth::user()->email }}
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="submit" value="Logout" name="logout">
                        </form>
                    </li>
                </ul>
            </div>
            <div class="dashboard-content">
                @yield('container')
            </div>
            
        </div>
    </section>
    <script src="{{ asset('js') }}/dashScript.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="{{ asset('js') }}/lightbox.js "></script>
    
</body>

</html>