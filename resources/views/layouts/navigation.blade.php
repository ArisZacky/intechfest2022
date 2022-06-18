<div class="dashboard-menu">
    <span><i class="fa fa-bars"></i></span>
    <img class="dashboard-logo" src="{{ asset('assets') }}/logo/Logotype Light Mode.png" alt="Logo">
    <!-- <ul class="dashboard-items">
        <li class="d-active">
            <img src="../assets/img/logo/INTECH FEST.png" alt="Icon">
            <p>Menu 1</p>
        </li>
        <li>
            <img src="../assets/img/logo/INTECH FEST.png" width="30" alt="Icon">
            <p>Menu 2</p>
        </li>
        <li>
            <img src="../assets/img/logo/INTECH FEST.png" width="30" alt="Icon">
            <p>Menu 3</p>
        </li>
        <li>
            <img src="../assets/img/logo/INTECH FEST.png" width="30" alt="Icon">
            <p>Menu 4</p>
        </li>
    </ul> -->
    <div class="dashboard-items">
        <a href="{{ route('dashboard') }}" class="{{ ($title === 'Home') ? 'd-active' : '' }}">
            <ion-icon name="home-outline"></ion-icon>
            <p>Dashboard</p>
        </a>
        @if (Auth::user()->level == 'admin')
            <a href="{{ route('competitions.index') }}"  class="{{ ($title === 'Lomba') ? 'd-active' : '' }}">
                <ion-icon name="trophy-outline"></ion-icon>
                <p>Lomba</p>
            </a>
            <a href="{{ route('pesertaLists.index') }}" class="{{ ($title === 'Daftar Peserta') ? 'd-active' : '' }}">
                <ion-icon name="people-outline"></ion-icon>
                <p>Peserta</p>
            </a>
            <a href="{{ route('kelolaUsers.index') }}" class="{{ ($title === 'Pembayaran') ? 'd-active' : '' }}">
                <ion-icon name="cash-outline"></ion-icon>
                <p>Pembayaran Peserta</p>
            </a>
            <a href="{{ route('pesertaAccepteds.index') }}" class="{{ ($title === 'Peserta Diterima') ? 'd-active' : '' }}">
                <ion-icon name="person-outline"></ion-icon>
                <p>Peserta Diterima</p>
            </a>
            <a href="{{ route('pnbdcProjects.index') }}" class="{{ ($title === 'Projek PNBDC') ? 'd-active' : '' }}">
                <ion-icon name="ribbon-outline"></ion-icon>
                <p>Projek PNBDC</p>
            </a>
        @endif
        <!-- <a href="">
            <img src="../assets/logo/INTECH FEST.png" alt="icon">
            <p>ChillTalks</p>
        </a> -->
        <!-- <a href="./menu4.html">
            <img src="../assets/img/logo/INTECH FEST.png" alt="icon">
            <p>Menu 4</p>
        </a> -->
        <!-- <a href="./menu5.html">
            <img src="../assets/img/logo/INTECH FEST.png" alt="icon">
            <p>Menu 5</p>
        </a> -->
    </div>
</div>