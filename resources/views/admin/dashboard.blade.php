@extends('layouts.app')

@section('container')
    <h2>{{ $judul }}</h2><br>
    @if(Auth::user()->email == 'adminzacky@in.tech')
    <section class="auth" style="align-items: center;">
        <div class="auth-content">
            <img src="{{ asset('assets') }}/logo/Logotype Dark Mode.png" alt="">
            <form class="auth-box" method="POST" action="{{ route('dashboard') }}">
            @csrf
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" :value="old('email')" required>
            <label for="password">Password</label>
            <input id="password" type="password"name="password" required autocomplete="new-password">
            <label for="repassword">Re-Password</label>
            <input id="repassword" type="password" name="password_confirmation" required>
            <input class="auth-action" type="submit" value="Daftar Sekarang">
            <input type="hidden" name="status" value="admin">
            <input type="hidden" name="level" value="admin">
            </form>
        </div>
    </section>
    @endif
    @yield('content')
@endsection