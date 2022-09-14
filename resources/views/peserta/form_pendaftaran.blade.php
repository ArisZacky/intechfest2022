<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Intechfest 2022</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css') }}/index.css">
</head>

<body>
    <section class="daftar">
        <div action="" class="daftar-box">
            <img src="{{ asset('assets') }}/logo/Logotype Dark Mode.png" alt="">
            <h1>
                @if ($data == 'PNBWDC')
                    PNBWDC Tingkat Perguruan Tinggi
                @elseif ($data == 'PNBDC')
                    PNBDC Tingkat Perguruan Tinggi
                @elseif ($data == 'PNBCTF')
                    PNBCTF Tingkat Umum
                @endif
            </h1>
            <form action="{{ route('peserta.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    @if ($data == 'PNBCTF')
                    <label for="nama_team">Nama Team</label>
                    <input type="text" name="nama_team" id="nama_team">
                    @endif
                    @if ($data == 'PNBCTF')
                    <label for="nama">Nama Ketua Team</label>
                    <input type="text" name="nama_lengkap" id="nama">
                    @endif
                    @if ($data != 'PNBCTF')
                    <label for="nama">Nama</label>
                    <input type="text" name="nama_lengkap" id="nama">
                    @endif
                    <label for="nins">
                        @if ($data == 'PNBWDC')
                            Nim (jika belum memiliki NIM sertakan “-” dalam kolom jawaban)
                        @elseif ($data == 'PNBDC')
                            Nim (jika belum memiliki NIM sertakan “-” dalam kolom jawaban)
                        @elseif ($data == 'PNBCTF')
                            NIK
                        @endif
                    </label>
                    <input type="text" name="nim_nisn_nik" id="nisn">
                    <label for="foto"><label for="">
                        @if ($data == 'PNBWDC')
                            Foto/Scan Kartu Tanda Mahasiswa (KTM)/ Surat Keterangan Mahasiswa jika ada dalam bentuk .Jpg
                        @elseif ($data == 'PNBDC')
                            Foto/Scan Kartu Tanda Mahasiswa (KTM)/ Surat Keterangan Mahasiswa jika ada dalam bentuk .Jpg
                        @elseif ($data == 'PNBCTF')
                            Foto/Scan Kartu Tanda Penduduk (KTP) Keseluruhan Team / ( Jika belum Memiliki KTP Sertakan Kartu Siswa (Pelajar) / Kartu Tanda Mahasiswa (Mahasiswa)) dalam bentuk .Jpg
                        @endif
                    </label><br></label>
                    <input type="file" name="foto_ktm_kts_ktp" id="foto" class="border-none">
                    @if ($data != 'PNBCTF')
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan">
                    @endif
                    @if ($data != 'PNBCTF')
                    <label for="kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="kelamin">
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                    @endif

                    <label for="no_hp">No HP/WA</label>
                    <input type="text" name="no_hp" id="no_hp">
                    <label for="line_telegram">Id Telegram</label>
                    <input type="text" name="line_telegram" id="line_telegram">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat">
                    @if ($data != 'PNBCTF')
                    <label for="provinsi">Provinsi</label>
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
                    </select>
                    @endif     
                    @if ($data == 'PNBCTF')
                    <label for="nama">Nama Anggota 1</label>
                    <input type="text" name="nama_anggota1" id="nama_anggota1">
                    <label for="nama">Nama Anggota 2</label>
                    <input type="text" name="nama_anggota2" id="nama_anggota2">
                    @endif             
                    @if ($data != 'PNBCTF')
                    <label for="instansi">
                        @if ($data == 'PNBWDC'||$data == 'PNBDC')
                            Asal Perguruan
                        @endif
                    </label>
                    <input type="text" name="instansi" id="instansi">
                    @endif
                    <input type="hidden" name="lomba" value="
                    @if ($data == 'PNBWDC')
                            1
                        @elseif ($data == 'PNBDC')
                            2
                        @elseif ($data == 'PNBCTF')
                            3
                        @endif
                    ">
                    <!-- <input type="hidden" name="user_id" value="{{ Auth::user()->id}}"> -->
                    <input type="submit" value="Daftar" name="submit" class="primary-button">
            </form>
            <a href="/peserta" class="primary-link">Kembali</a>
        </div>
    </section>
</body>

</html>