@extends('admin.dashboard')

@section('content')
<div>
    <form action="/competitions" method="GET" style="margin-bottom: 20px">
        <input class="input_cari" name="cari" placeholder="Cari Nama Lomba" type="text" style="padding: 8px 12px; border:1px solid #333;">
        <button type="submit" class="btn-back"> Cari Lomba</button>
    </form>
    <a href="{{ route('competitions.create') }}"><button class="primary-button">Tambah Lomba</button></a>
    <a href="{{ route('competitions.index') }}"><button class="primary-button" style="background-color: green">Tampilkan Semua</button></a>
</div><br>
<div class="row">
    <div class="col-md-12">
    <table class="table table2">
    
        <tr>
            <td>No</td>
            <td>Nama Lomba</td>
            <td>Deskripsi</td>
            <td>Action</td>
        </tr>
            @php
                $no = 1;
            @endphp
            @foreach ($competitions as $competition)
                <tr>
                    <td> {{ $no++ }} </td>
                    <td> {{ ucwords($competition->nama_lomba) }} </td>
                    <td> {{ substr(strip_tags($competition->deskripsi) ,0 ,30) }} ...</td>
                    <td>
                        <a href="{{ route('competitions.edit',$competition->id) }}"> <button> Edit </button></a>
                        <form action="{{ route('competitions.destroy',$competition->id) }}" method="POST">
        
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick = "return confirm('Yakin hapus Lomba?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach 
    </table>
    </div>
</div>

    
@endsection



