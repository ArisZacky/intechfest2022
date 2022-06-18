@extends('peserta.dashboard')

@section('content')
    <h2>Pendaftaran Lomba</h2>
    <form action="{{ route('peserta.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nama Lengkap</label><br>
        <input type="text" name="nama_lengkap"><br><br>
        <label for="">
            @if ($data == 'PNBWDC')
                Nim (jika belum memiliki NIM sertakan “-” dalam kolom jawaban)
            @elseif ($data == 'PNBDC')
                NISN (jika belum memiliki NIM sertakan “-” dalam kolom jawaban)
            @elseif ($data == 'PNBCTF')
                NIK (Jiks belum memiliki sertakan NISN/NIM)
            @endif
        </label><br>
        <input type="text" name="nim_nisn_nik"><br><br>
        <label for="">
            @if ($data == 'PNBWDC')
                Foto/Scan Kartu Tanda Mahasiswa (KTM)/ Surat Keterangan Mahasiswa jika ada
            @elseif ($data == 'PNBDC')
                Foto/Scan Kartu Tanda Mahasiswa (KTM)/ Surat Keterangan Mahasiswa jika ada
            @elseif ($data == 'PNBCTF')
                Foto/Scan Kartu Tanda Penduduk (KTP) / ( Jika belum Memiliki KTP Sertakan Kartu Siswa (Pelajar) / Kartu Tanda Mahasiswa (Mahasiswa))
            @endif
        </label><br>
        <input type="File" name="ktm_kts_ktp"><br><br>
        @if($errors->has('ktm_kts_ktp'))
            <label>Pastikan foto berupa jpeg, jpg, png & size foto < 5mb</label><br><br>
        @endif
        @if ($data != 'PNBCTF')
            <label for="">Jurusan</label><br>
            <input type="text" name="jurusan"><br><br>
        @endif
        <label for="">Jenis Kelamin</label><br>
        <select name="jenis_kelamin" id="">
            <option value="l">Laki-laki</option>
            <option value="p">Perempuan</option>
        </select><br><br>
        <label for="">No Hp</label><br>
        <input type="text" name="no_hp"><br><br>
        <label for="">Id Line/Telegram (tanpa @)</label><br>
        <input type="text" name="line_telegram"><br><br>
        <label for="">Alamat</label><br>
        <input type="text" name="alamat"><br><br>
        <label for="">Provinsi</label><br>
        <select name="provinsi" >
            <option>Aceh</option>
            <option>Sumatra Utara</option>
            <option>Sumatra Barat</option>
            <option>Riau</option>
            <option>Kepulauan Riau</option>
            <option>Jambi</option>
            <option>Bengkulu</option>
            <option>Sumatra Selatan</option>
            <option>Kepulauan Bangka Belitung</option>
            <option>Lampung</option>
            <option>Daerah Khusus Ibukota Jakarta</option>
            <option>Banten</option>
            <option>Jawa Barat</option>
            <option>Jawa Tengah</option>
            <option>Daerah Istimewa Yogyakarta</option>
            <option>Jawa Timur</option>
            <option>Bali</option>
            <option>Nusa Tenggara Barat</option>
            <option>Nusa Tenggara Timur</option>
            <option>Kalimantan Barat</option>
            <option>Kalimantan Tengah</option>
            <option>Kalimantan Selatan</option>
            <option>Kalimantan Timur</option>
            <option>Kalimantan Utara</option>
            <option>Sulawesi Utara</option>
            <option>Gorontalo</option>
            <option>Sulawesi Tengah</option>
            <option>Sulawesi Barat</option>
            <option>Sulawesi Selatan</option>
            <option>Sulawesi Tenggara</option>
            <option>Maluku Utara</option>
            <option>Maluku</option>
            <option>Papua Barat</option>
            <option>Papua</option>
        </select><br><br>
        @if ($data != 'PNBCTF')
            <label for="">
            @if ($data == 'PNBDC'||$data == 'PNBWDC')
                Asal Perguruan
            @endif
            </label><br>
            <input type="text" name="asal_sekolah_perguruan"><br><br>
        @endif
        <input type="hidden" name="lomba" value="
        @if ($data == 'Perguruan-tinggi')
                1
            @elseif ($data == 'SMA-SMK')
                2
            @elseif ($data == 'Umum')
                3
            @endif
        "><br><br>
        <input type="submit" name="submit" id="" value="TAMBAH">
    </form>
    <br>
    <a href="{{ route('peserta.index') }}"><button>BACK</button></a>

@endsection