@extends('admin.dashboard')

@section('content')
<div class="dash-input">
    <form action="{{ route('competitions.update',$competition->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="namaKategori">Nama Lomba</label>
        <input type="text" name="nama_lomba" id="namaKategori" value="{{ $competition->nama_lomba }}" required>
        <label for="deskripsiKategori">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsiKategori" required>{{ $competition->deskripsi }}</textarea>
        <input type="submit" value="Edit" class="primary-button">
    </form>
    <a href="{{ route('competitions.index') }}" class="primary-link"
        style="text-align: left; display: inline;">Kembali</a>
</div>
@endsection