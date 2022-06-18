@extends('admin.dashboard')

@section('content')
<div>
    <form action="/pesertaLists" method="GET" style="margin-bottom: 20px">
        <input class="input_cari" name="cari" placeholder="Cari No Registrasi" type="text" style="padding: 8px 12px; border:1px solid #333;">
        <button type="submit" class="btn-back"> Cari No Registrasi</button>
    </form>
    <a href="{{ route('pesertaLists.index') }}"><button class="primary-button" style="background-color: green">Tampilkan Semua</button></a>
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
        
        @foreach ($pesertaLists as $pesertaList)
            <tr>
                <td> {{ $no++ }} </td>
                <td> {{ $pesertaList->no_registrasi }} </td>
                <td> {{ $pesertaList->user->email }} </td>
                <td> {{ $pesertaList->competition->nama_lomba }} </td>
                <td> {{ $pesertaList->status_pembayaran }} </td>
                <td><a href="{{ route('pesertaLists.show',$pesertaList->id) }}"><button>Detail</button></a></td>
                <td>
                    <form action="{{ route('pesertaLists.destroy',$pesertaList->id) }}" method="POST">
    
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick = "return confirm('Yakin hapus Peserta?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
</table>
@endsection