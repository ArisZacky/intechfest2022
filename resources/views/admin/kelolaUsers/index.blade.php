@extends('admin.dashboard')

@section('content')
<div>
    <form action="/kelolaUsers" method="GET" style="margin-bottom: 20px">
        <input class="input_cari" name="cari" placeholder="Cari No Registrasi" type="text" style="padding: 8px 12px; border:1px solid #333;">
        <button type="submit" class="btn-back"> Cari No Registrasi</button>
    </form>
    <a href="{{ route('kelolaUsers.index') }}"><button class="primary-button" style="background-color: green">Tampilkan Semua</button></a>
</div><br>
<table class="table">
    <tr>
        <td>No</td>
        <td>No Registrasi</td>
        <td>Email</td>
        <td>Lomba yang Diikuti</td>
        <td>Status Bayar</td>
        <td>Data</td>
        <td>Action</td>
    </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($kelolaUsers as $kelolaUser)
            <tr>
                <td> {{ $no++ }} </td>
                <td> {{ $kelolaUser->no_registrasi }} </td>
                <td> {{ $kelolaUser->user->email }} </td>
                <td> {{ $kelolaUser->competition->nama_lomba }} </td>
                <td> {{ $kelolaUser->status_pembayaran }} </td>
                <td><a href="{{ route('kelolaUsers.show',$kelolaUser->id) }}"><button>Detail</button></a></td>
                <td>
                    <form action="{{ route('kelolaUsers.destroy',$kelolaUser->id) }}" method="POST">
    
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick = "return confirm('Yakin hapus Peserta?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
</table>
@endsection