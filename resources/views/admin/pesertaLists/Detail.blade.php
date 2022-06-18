@extends('admin.dashboard')

@section('content')
    <div class="detail" style="line-height: 30px">
        <b>No Registrasi : {{ $pesertaList->no_registrasi }}</b><br>
        Email : {{ $pesertaList->user->email }} <br>
        Nama Lengkap : {{ $pesertaList->nama_lengkap }} <br>
        Nama Lomba : {{ $pesertaList->competition->nama_lomba }} <br>
        NIM/NISN/NIK : {{ $pesertaList->nim_nis_nik }} <br>
        <div> Foto KTM/Kartu Siswa/KTP : <a class="example-image-link" href="{{ asset('img_pendaftaran') }}/{{ $pesertaList->foto_ktm_ks_ktp }}" data-lightbox="example-1"><img style="width: 100px; height:70px;" src="{{ asset('img_pendaftaran') }}/{{ $pesertaList->foto_ktm_ks_ktp }}" alt=""></a> </div>
        Jurusan : {{ $pesertaList->jurusan }} <br>
        Jenis Kelamin : {{ strtoupper($pesertaList->jenis_kelamin) }} <br>
        No Hp : {{ $pesertaList->no_hp }} <br>
        Id Telegram : {{ $pesertaList->line_telegram }} <br>
        Alamat : {{ $pesertaList->alamat }} <br>
        Provinsi : {{ $pesertaList->provinsi }} <br>
        Instansi : {{ $pesertaList->instansi }} <br>
        Status Bayar : <b>{{ $pesertaList->status_pembayaran }}</b> 
    </div>
    <br>
    <a href="{{ route('pesertaLists.index') }}"><button class="btn-back">BACK</button></a>
@endsection