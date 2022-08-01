@extends('admin.dashboard')

@section('content')
<div class="detail" style="line-height: 30px">
<form action="{{ route('kelolaUsers.update',$kelolaUser->id) }}" method="POST">
    @csrf
    @method('PUT')
    <b>No Registrasi : {{ $kelolaUser->no_registrasi }}</b><br>
    Email : {{ $kelolaUser->user->email }} <br>

    Nama Lengkap : {{ $kelolaUser->nama_lengkap }} <br>
    @if($kelolaUser->nama_anggota1 != null)
      Nama Anggota 1 : {{ $kelolaUser->nama_anggota1 }} <br>    
    @endif
    @if($kelolaUser->nama_anggota2 != null)
      Nama Anggota 2 : {{ $kelolaUser->nama_anggota2 }} <br>    
    @endif
    Nama Lomba : {{ $kelolaUser->competition->nama_lomba }} <br>
    NIM/NISN/NIK : {{ $kelolaUser->nim_nis_nik }} <br>
   <div> Foto KTM/Kartu Siswa/KTP : <a class="example-image-link" href="{{ asset('img_pendaftaran') }}/{{ $kelolaUser->foto_ktm_ks_ktp }}" data-lightbox="example-1"><img style="width: 100px; height:70px;" src="{{ asset('img_pendaftaran') }}/{{ $kelolaUser->foto_ktm_ks_ktp }}" alt=""></a> </div>
    Jurusan : {{ $kelolaUser->jurusan }} <br>
    Jenis Kelamin : {{ strtoupper($kelolaUser->jenis_kelamin) }} <br>
    No Hp : {{ $kelolaUser->no_hp }} <br>
    Id Telegram : {{ $kelolaUser->line_telegram }} <br>
    Alamat : {{ $kelolaUser->alamat }} <br>
    Provinsi : {{ $kelolaUser->provinsi }} <br>
    Instansi : {{ $kelolaUser->instansi }} <br>
    Status Bayar : <b>{{ $kelolaUser->status_pembayaran }}</b> <br>
  <div>  Bukti Pembayaran : <a class="example-image-link" href="{{ asset('img_pembayaran') }}/{{ $kelolaUser->payment->bukti_pembayaran }}" data-lightbox="example-2"><img style="width: 100px; height:70px;" src="{{ asset('img_pembayaran') }}/{{ $kelolaUser->payment->bukti_pembayaran }}" alt=""></a></div> <br>
    <input type="hidden" name="status_pembayaran" value="diterima">
    <input class="btn-terima" type="submit" name="submit" id="" value="Terima Peserta" onclick = "return confirm('Yakin terima Peserta?')">
</form>
</div>
<br>
<a href="{{ route('kelolaUsers.index') }}"><button class="btn-back">BACK</button></a>
@endsection