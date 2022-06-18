@extends('layouts.appPeserta')

@section('content')
    @if ($data=='pnbwdc' && Auth::user()->status == 'belum regis')
        <img src="{{ asset('assets') }}/logo/WDC/Logo Type Signature Color.png" alt="">
    @endif
    @if ($data=='pnbdc' && Auth::user()->status == 'belum regis')
        <img src="{{ asset('assets') }}/logo/DC/Logo Type Signature Color.png" alt="">
    @endif
    @if ($data=='pnbctf' && Auth::user()->status == 'belum regis')
        <img src="{{ asset('assets') }}/logo/INTECH FEST.png" alt="">
    @endif
    @if (Auth::user()->status =='belum regis')
        @if ($data=='pnbwdc')
            <a href="/daftar/PNBWDC" class="primary-button">Daftar PNBWDC</a>
        @endif
        @if ($data=='pnbdc')
            <a href="/daftar/PNBDC" class="primary-button">Daftar PNBDC</a>
        @endif
        @if ($data=='pnbctf')
            <a href="/daftar/PNBCTF" class="primary-button">Daftar PNBCTF</a>
        @endif
    @endif
    @if (Auth::user()->status !='belum regis')
    <div class="payment" style="text-align: center;background-color: #eee;width: 45%;margin:0 auto;padding: 20px">
        <h2 style="padding:20px 0;color: #3e3e3e">Pembayaran</h2><br>
        <p>Anda telah terdaftar dengan no registrasi : <b>{{ $regisuser->no_registrasi }}</b></p><br>
        @if ($status == 'diterima')
            <p style="color: #28A745;">Pembayaran sukses, silahkan menunggu untuk diinvite ke group Telegram.</p><br><br>
        @endif
        @if ($status == 'sudah bayar')
            <p>Pembayaran anda sedang di proses, mohon menunggu info lebih lanjut.</p><br><br>
        @endif
        @if ($status == 'belum bayar')
            <div class="box-payment">
                <p>Silahkan melakukan pembayaran ke : </p>
                <p>BRI <b>728301011874538</b> a.n <b>Luh Komang Winda Sucipta Dewi</b></p><br>
                <p>atau</p><br>
                <p>DANA <b>081339821074</b> a.n <b>putuayucandradewi</b></p>
            </div>
            <form action="{{ route('payment.store') }}" style="padding-top: 40px"  method="POST" enctype="multipart/form-data">
                @csrf
                <label>Upload Bukti Pembayaran :</label>
                <input type="file" name="bukti_pembayaran" id="" style="margin:20px 0 0;">
                <input type="submit" value="Konfirmasi Pembayaran" name="submit" class="primary-button" style="margin:20px 0;border:none;cursor: pointer;">
            </form>
        @endif
    </div>
    @endif
@endsection