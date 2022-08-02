@extends('layouts.appPeserta')

@section('content')
    @if ($data=='pnbwdc' && Auth::user()->status == 'belum regis')
        <img src="{{ asset('assets') }}/logo/WDC/Logo Type Signature Color.png" alt="">
    @endif
    @if ($data=='pnbdc' && Auth::user()->status == 'belum regis')
        <img src="{{ asset('assets') }}/logo/DC/Logo Type Signature Color.png" alt="">
    @endif
    @if ($data=='pnbctf' && Auth::user()->status == 'belum regis')
        <img src="{{ asset('assets') }}/logo/CTF/Logo Type Signature Color.png" alt="">
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
    <div class="payment" style="text-align: center;background-color: #ffffff;width: 45%;margin:0 auto;padding: 20px">
        <h2 style="padding:20px 0;color: #3e3e3e">Profile Peserta</h2><br>
        <p>Anda telah terdaftar dengan no registrasi : <b>{{ $regisuser->no_registrasi }}</b></p>
        @if ($status == 'diterima')
        <table class="profilPeserta" >
        <tr>
            <td class="tabel">Kategori Lomba</td>
            <td class="tabel">:</td>
            @if($regisuser->competition_id == 1)
            <td class="tabel">Politeknik Negeri Bali Web Design Competition</td>
            @elseif($regisuser->competition_id == 2)
            <td class="tabel">Politeknik Negeri Bali Design Challenge</td>
            @elseif($regisuser->competition_id == 3)
            <td class="tabel">Politeknik Negeri Bali Capture The Flags</td>
            @endif
        </tr>
        @if($regisuser->competition_id != 3)
        <tr>
            <td class="tabel">Nama Peserta</td>
            <td class="tabel">:</td>
            <td class="tabel">{{$regisuser->nama_lengkap}}</td>
        </tr>
        @elseif($regisuser->competition_id == 3)
        <tr>
            <td class="tabel">Nama Ketua</td>
            <td class="tabel">:</td>
            <td class="tabel">{{$regisuser->nama_lengkap}}</td>
        </tr>
        @endif
        @if($regisuser->competition_id == 3)
        <tr>
            <td class="tabel">Nama Anggota 1</td>
            <td class="tabel">:</td>
            <td class="tabel">{{$regisuser->nama_anggota1}}</td>
        </tr>
        @endif
        @if($regisuser->competition_id == 3)
        <tr>
            <td class="tabel">Nama Anggota 2</td>
            <td class="tabel">:</td>
            <td class="tabel">{{$regisuser->nama_anggota2}}</td>
        </tr>
        @endif
        <tr>
            <td class="tabel">NIM / NIK</td>
            <td class="tabel">:</td>
            <td class="tabel">{{$regisuser->nim_nis_nik}}</td>
        </tr>
        @if($regisuser->competition_id != 3)
        <tr>
            <td class="tabel">Instansi</td>
            <td class="tabel">:</td>
            <td class="tabel">{{$regisuser->instansi}}</td>
        </tr>
        @endif
        @if($regisuser->competition_id != 3)
        <tr>
            <td class="tabel">Jurusan</td>
            <td class="tabel">:</td>
            <td class="tabel">{{$regisuser->jurusan}}</td>
        </tr>
        @endif

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
        @if($regisuser->competition_id == 1 && empty($project->regis_user_id))
        <tr>
            <td class="tabel">Upload Project
            <p style="font-size: 10px">Pastikan file berupa zip, rar & size < 50mb</p></td>
            <td class="tabel">:</td>
            <td class="tabel">
                <form action="{{ route('UploadProjectWDC.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="nama" value="{{$regisuser->nama_lengkap}}">
                    <input type="file" name="project" id="">
                    <br>
                    <input type="submit" value="Upload" name="submit" class="primary-button">
                </form>
            </td>
        </tr>
        @elseif($regisuser->competition_id == 1 && $project->regis_user_id != null)
        <tr>
            <td class="tabel">Upload Project <br>
            <p style="font-size: 10px">Pastikan file berupa zip, rar & size < 50mb</p></td>
            <td class="tabel">:</td>
            <td class="tabel-update">
                <form action="{{ route('UploadProjectWDC.update', $project->regis_user_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="nama" value="{{$regisuser->nama_lengkap}}">
                    <input type="file" name="project" id=""><br>
                    <input type="submit" value="Upload" name="submit" class="primary-button">
                    <a class="link" href="{{ asset('project_pnbwdc') }}/{{ $project->project }}" download="{{ asset('project_pnbwdc') }}/{{ $project->project }}">View Project</a>
                </form>
            </td>            
        </tr>
        @elseif($regisuser->competition_id == 2 && empty($project->regis_user_id))
        <tr>
        <td class="tabel">Upload Project
        <p style="font-size: 10px">Pastikan file berupa zip, rar & size < 30mb</p></td>
            <td class="tabel">:</td>
            <td class="tabel">
            <form action="{{ route('UploadProject.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="nama" value="{{$regisuser->nama_lengkap}}">
                    <input type="file" name="project" id="">
                    <br>
                    <input type="submit" value="Upload" name="submit" class="primary-button">
                </form>
                </form>
            </td>
        </tr>
        @elseif($regisuser->competition_id == 2 && $project->regis_user_id != null)
        <tr>
            <td class="tabel">Upload Project
            <p style="font-size: 10px">Pastikan file berupa zip, rar & size < 30mb</p></td>
            <td class="tabel">:</td>
            <td class="tabel-update">
            <form action="{{ route('UploadProject.update', $project->regis_user_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="nama" value="{{$regisuser->nama_lengkap}}">
                    <input type="file" name="project" id=""><br>
                    <input type="submit" value="Upload" name="submit" class="primary-button">
                    <a class="link" href="{{ asset('project_pnbdc') }}/{{ $project->project }}" download="{{ asset('project_pnbdc') }}/{{ $project->project }}">View Project</a>
                </form>
            </td>
        </tr>
        @elseif($regisuser->competition_id == 3)
        <tr>
            <td class="tabel">Link PNBCTF</td>
            <td class="tabel">:</td>
            <td class="tabel"><a href="{{ asset('assets/logo/INTECH FEST.png') }}">xing xeng</a></td>
        </tr>
        @endif
        </table>
        @endif
        @if ($status == 'sudah bayar')
        <br>
            <h2 style="padding:20px 0;color: #3e3e3e">Status</h2>
            <table>
                <tr>
                    <td class="tabel">Status</td>
                    <td class="tabel">:</td>
                    <td class="unverified">Unverified</td>
                </tr>
            </table>
            <p style="text-align: justify">Pembayaran anda sedang di proses, panitia akan memverifikasi akun dalam waktu <b>maksimal 2x24jam</b></p><br><br>
            <p style="text-align: justify">Jika terdapat kendala dalam proses regitrasi / belum dikonfirmasi hingga 2x24 jam silahkan hubungi :</p>
            <p style="text-align: justify"><a href="https://api.whatsapp.com/send/?phone=%2B628980281616&text&app_absent=0" target="_blank" class="contactPerson">62 898-0281-616 </a>(Ferlyn)</p>
            <p style="text-align: justify"><a href="https://api.whatsapp.com/send/?phone=%2B6289680321813&text&app_absent=0" target="_blank" class="contactPerson">62 896-8032-1813 </a>(Diva)</p>
        @endif
        @if ($status == 'belum bayar')
            <div class="box-payment">
                <p>Untuk memverifikasi akun silahkan melanjutkan ke tahap pembayaran</p>
                <h2 style="padding:20px 0;color: #3e3e3e">Pembayaran</h2>
                <p>Silahkan melakukan pembayaran ke : </p>
                <p>BCA <b>7721092490</b> a.n <b>NI KADEK DIVA MAYRIKA SARTANA</b></p><br>
                <p>atau</p><br>
                <p>DANA <b>089680321813</b> a.n <b>NI KADEK DIVA MAYRIKA SARTANA</b></p><br>
                <p>Sejumlah</p>
                <p><b>Rp50.000,-</b> (PNBWDC & PNBDC)</p>
                <p><b>Rp75.000,-</b> (PNBCTF)</p>
            </div>
            <form action="{{ route('payment.store') }}" style="padding-top: 40px"  method="POST" enctype="multipart/form-data">
                @csrf
                <h2>Konfirmasi Pembayaran</h2>
                <label>Upload Bukti Pembayaran :</label>
                <input type="file" name="bukti_pembayaran" id="" style="margin:20px 0 0;">
                <input type="submit" value="Konfirmasi Pembayaran" name="submit" class="primary-button" style="margin:20px 0;border:none;cursor: pointer;">
            </form>
        @endif
    </div>
    @endif
@endsection