@extends('admin.dashboard')

@section('content')
    <div class="dash-input">
        <form action="{{ route('competitions.store') }}" method="POST">
            @csrf
            <label for="namaKategori">Nama Lomba</label>
            <input type="text" name="nama_lomba" id="namaKategori" required>
            <label for="deskripsiKategori">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsiKategori" required></textarea>
            <input type="submit" value="Tambah" class="primary-button">
        </form>
        <a href="{{ route('competitions.index') }}" class="primary-link"
            style="text-align: left; display: inline;">Kembali</a>
    </div>
@endsection