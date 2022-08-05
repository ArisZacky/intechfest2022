@extends('admin.dashboard')

@section('content')
<div>
    <form action="/pnbctfProjects" method="GET" style="margin-bottom: 20px">
        <input class="input_cari" name="cari" placeholder="Cari Nama Peserta" type="text" style="padding: 8px 12px; border:1px solid #333;">
        <button type="submit" class="btn-back"> Cari </button>
    </form>
    <a href="{{ route('pnbctfProjects.index') }}"><button class="primary-button" style="background-color: green">Tampilkan Semua</button></a>
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
        @foreach ($pnbctfProjects as $pnbctfProject)
            <tr>
                <td> {{ $no++ }} </td>
                <td> {{ $pnbctfProject->nama_lengkap }} </td>
                <td> {{ $pnbctfProject->project }} </td>
                <td><a target="_blank" href="{{ asset('project_pnbctf') }}/{{ $pnbctfProject->project }}" download="{{ asset('project_pnbctf') }}/{{ $pnbctfProject->project }}" rel="noopener noreferrer"><button>Lihat</button></a></td>
            </tr>
        @endforeach
</table>
@endsection