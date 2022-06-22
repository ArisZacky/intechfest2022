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
        <h2 style="padding:20px 0;color: #3e3e3e">Profile Peserta</h2><br>
        <p>Anda telah terdaftar dengan no registrasi : <b>{{ $regisuser->no_registrasi }}</b></p><br>
        @if ($status == 'diterima')
        <table class="profilPeserta">
        <tr>
            <td class="tabel">Kategori Lomba</td>
            <td class="tabel">:</td>
            @if($lomba == 1)
            <td class="tabel">Politeknik Negeri Bali Web Design Competition</td>
            @elseif($lomba == 2)
            <td class="tabel">Politeknik Negeri Bali Design Challenge</td>
            @elseif($lomba == 3)
            <td class="tabel">Politeknik Negeri Bali Capture The Flags</td>
            @endif
        </tr>
        <tr>
            <td class="tabel">Nama Peserta</td>
            <td class="tabel">:</td>
            <td class="tabel">{{$regisuser->nama_lengkap}}</td>
        </tr>
        <tr>
            <td class="tabel">NIM / NIK</td>
            <td class="tabel">:</td>
            <td class="tabel">{{$regisuser->nim_nis_nik}}</td>
        </tr>
        @if($lomba == 1 || 2)
        <tr>
            <td class="tabel">Instansi</td>
            <td class="tabel">:</td>
            <td class="tabel">{{$regisuser->instansi}}</td>
        </tr>
        @endif
        <tr>
            <td class="tabel">Jurusan</td>
            <td class="tabel">:</td>
            <td class="tabel">{{$regisuser->jurusan}}</td>
        </tr>
        <tr>
            <td class="tabel">No HP</td>
            <td class="tabel">:</td>
            <td class="tabel">{{$regisuser->no_hp}}</td>
        </tr>
        <tr>
            <td class="tabel">ID Telegram</td>
            <td class="tabel">:</td>
            <td class="tabel">{{$regisuser->line_telegram}}</td>
        </tr>
        <tr>
            <td class="tabel">Alamat</td>
            <td class="tabel">:</td>
            <td class="tabel">{{$regisuser->alamat}}</td>
        </tr>
        <tr>
            <td class="tabel">Status</td>
            <td class="tabel">:</td>
            <td class="verified">Verified</td>
        </tr>
        @if($lomba == 1 && empty($project->regis_user_id))
        <tr>
            <td class="tabel">Upload Project</td>
            <td class="tabel">:</td>
            <td class="tabel">
                <form action="{{ route('UploadProjectWDC.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="nama" value="{{$regisuser->nama_lengkap}}">
                    <input type="file" name="project" id="">
                    <input type="submit" value="Daftar" name="submit" class="primary-button">
                </form>
            </td>
        </tr>
        @elseif($lomba == 1 && $project->regis_user_id != null)
        <tr>
            <td class="tabel">Upload Project</td>
            <td class="tabel">:</td>
            <td class="tabel-update">
                <form action="{{ route('UploadProjectWDC.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="nama" value="{{$regisuser->nama_lengkap}}">
                    <input type="file" name="project" id="">
                    <input type="submit" value="Daftar" name="submit" class="primary-button">
                    <br><a href="{{$project->project}}" download="{{$project->project}}">View Project</a>
                </form>
            </td>            
        </tr>
        @elseif($lomba == 2 && empty($project->regis_user_id))
        <tr>
        <td class="tabel">Upload Project</td>
            <td class="tabel">:</td>
            <td class="tabel">
                <form action="{{ route('UploadProject.store') }}" method="POST">
                @csrf
                    <input type="file" name="project" id="" onchange="this.form.submit()">
                </form>
            </td>
        </tr>
        @elseif($lomba == 2 && $project->regis_user_id != null)
        <tr>
            <td class="tabel">Upload Project</td>
            <td class="tabel">:</td>
            <td class="tabel">
                <form action="{{ route('UploadProjectWDC.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="nama" value="{{$regisuser->nama_lengkap}}">
                    <input type="file" name="project" id="">
                    <input type="submit" value="Daftar" name="submit" class="primary-button">
                </form>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>3</td>
            <td><a href="{{ asset('assets/logo/INTECH FEST.png') }}">View Project</a></td>
        </tr>
        @endif
        </table>
        @endif
        @if ($status == 'sudah bayar')
            <h2 style="padding:20px 0;color: #3e3e3e">Pembayaran</h2><br>
            <p>Anda telah terdaftar dengan no registrasi : <b>{{ $regisuser->no_registrasi }}</b></p><br>
            <p>Pembayaran anda sedang di proses, mohon menunggu info lebih lanjut.</p><br><br>
        @endif
        @if ($status == 'belum bayar')
            <div class="box-payment">
                <h2 style="padding:20px 0;color: #3e3e3e">Pembayaran</h2><br>
                <p>Anda telah terdaftar dengan no registrasi : <b>{{ $regisuser->no_registrasi }}</b></p><br>
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