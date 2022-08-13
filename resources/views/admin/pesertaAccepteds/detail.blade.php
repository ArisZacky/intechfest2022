@extends('admin.dashboard')

@section('content')
<div class="detail" style="line-height: 30px">
    <b>No Registrasi : {{ $pesertaAccepted->no_registrasi }}</b><br>
    Email : {{ $pesertaAccepted->user->email }} <br>
    Nama Lengkap : {{ $pesertaAccepted->nama_lengkap }} <br>
    @if($pesertaAccepted->nama_anggota1 != null)
        Nama Anggota 1 : {{ $pesertaAccepted->nama_anggota1 }} <br>    
        @endif
        @if($pesertaAccepted->nama_anggota2 != null)
        Nama Anggota 2 : {{ $pesertaAccepted->nama_anggota2 }} <br>    
        @endif
    Nama Lomba : {{ $pesertaAccepted->competition->nama_lomba }} <br>
    NIM/NISN/NIK : {{ $pesertaAccepted->nim_nis_nik }} <br>
    <div> Foto KTM/Kartu Siswa/KTP : <a class="example-image-link" href="{{ asset('img_pendaftaran') }}/{{ $pesertaAccepted->foto_ktm_ks_ktp }}" data-lightbox="example-1"><img style="width: 100px; height:70px;" src="{{ asset('img_pendaftaran') }}/{{ $pesertaAccepted->foto_ktm_ks_ktp }}" alt=""></a> </div>
    Jurusan : {{ $pesertaAccepted->jurusan }} <br>
    Jenis Kelamin : {{ strtoupper($pesertaAccepted->jenis_kelamin) }} <br>
    No Hp : {{ $pesertaAccepted->no_hp }} <br>
    Id Telegram : {{ $pesertaAccepted->line_telegram }} <br>
    Alamat : {{ $pesertaAccepted->alamat }} <br>
    Provinsi : {{ $pesertaAccepted->provinsi }} <br>
    Instansi : {{ $pesertaAccepted->instansi }} <br>
    Status Bayar : <b>{{ $pesertaAccepted->status_pembayaran }}</b> <br>
    <div>  Bukti Pembayaran : <a class="example-image-link" href="{{ asset('img_pembayaran') }}/{{ $pesertaAccepted->payment->bukti_pembayaran }}" data-lightbox="example-2"><img style="width: 100px; height:70px;" src="{{ asset('img_pembayaran') }}/{{ $pesertaAccepted->payment->bukti_pembayaran }}" alt=""></a></div> <br>
</div>
<br>
<a href="{{ route('pesertaAccepteds.index') }}"><button class="btn-back">BACK</button></a>
@endsection