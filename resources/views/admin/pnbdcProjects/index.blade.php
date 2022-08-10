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
        <td>Project</td>
        <td>Lihat Project</td>
    </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($pnbdcProjects as $pnbdcProject)
            <tr>
                <td> {{ $no++ }} </td>
                <td> {{ $pnbdcProject->nama_lengkap }} </td>
                <td> {{ $pnbdcProject->project }} </td>
                <td><a target="_blank" href="{{ asset('project_pnbdc') }}/{{ $pnbdcProject->project }}" download="{{ asset('project_pnbdc') }}/{{ $pnbdcProject->project }}" rel="noopener noreferrer"><button>Lihat</button></a></td>
            </tr>
        @endforeach
</table>
@endsection