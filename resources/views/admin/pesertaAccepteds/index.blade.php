@extends('admin.dashboard')

@section('content')
<div>
    <form action="/pesertaAccepteds" method="GET" style="margin-bottom: 20px">
        <input class="input_cari" name="cari" placeholder="Cari Nama Peserta" type="text" style="padding: 8px 12px; border:1px solid #333;">
        <button type="submit" class="btn-back"> Cari </button>
    </form>
    <a href="{{ route('pesertaAccepteds.index') }}"><button class="primary-button" style="background-color: green">Tampilkan Semua</button></a>
</div><br>
<table class="table table3">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>No Hp</td>
        <td>Lomba yang Diikuti</td>
        <td>Status Bayar</td>
        <td>Data</td>
        <td>Action</td>
    </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($pesertaAccepteds as $pesertaAccepted)
            <tr>
                <td> {{ $no++ }} </td>
                <td> {{ $pesertaAccepted->nama_lengkap }} </td>
                <td> {{ $pesertaAccepted->no_hp }} </td>
                <td> {{ $pesertaAccepted->competition->nama_lomba }} </td>
                <td> {{ $pesertaAccepted->status_pembayaran }} </td>
                <td><a href="{{ route('pesertaAccepteds.show',$pesertaAccepted->id) }}"><button>Detail</button></a></td>
                <td>
                    <form action="{{ route('pesertaAccepteds.destroy',$pesertaAccepted->id) }}" method="POST">
    
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick = "return confirm('Yakin hapus Peserta?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
</table>
@endsection