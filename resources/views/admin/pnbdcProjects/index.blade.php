@extends('admin.dashboard')

@section('content')
<div>
    <form action="/pnbdcProjects" method="GET" style="margin-bottom: 20px">
        <input class="input_cari" name="cari" placeholder="Cari Nama Peserta" type="text" style="padding: 8px 12px; border:1px solid #333;">
        <button type="submit" class="btn-back"> Cari </button>
    </form>
    <a href="{{ route('pnbdcProjects.index') }}"><button class="primary-button" style="background-color: green">Tampilkan Semua</button></a>
</div><br>
<table class="table table4">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Link</td>
        <td>Lihat Link</td>
    </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($pnbdcProjects as $pnbdcProject)
            <tr>
                <td> {{ $no++ }} </td>
                <td> {{ $pnbdcProject->nama_lengkap }} </td>
                <td> {{ $pnbdcProject->link }} </td>
                <td><a href="{{ $pnbdcProject->link }}" rel="noopener noreferrer" target="_blank"><button>Lihat</button></a></td>
            </tr>
        @endforeach
</table>
@endsection