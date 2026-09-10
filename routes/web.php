<?php

use Illuminate\Support\Facades\Route;

Route::get('/amel', function () {
    return view('welcome');
});

Route::get('/luqman_ganteng', function () {
    return view('malang');
});

Route::get('/biodata', function () {   
    return view('biodata',);
});

Route::get('/keluarga', function () {
    
    return view('keluarga');
});

Route::get('/sekolah', function () {
    return view('sekolah');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});

Route::get('/ininyoba/biodata', function () {
    $nama = "Amel";
    $foto = 'images/my photo.jpeg';
    //return view('biodata.data', compact('nama'));
    return view('biodata.data', ['nyamah' => $nama, 
    'foto' => $foto ]);
});

Route::get('/mybio', function () {
    $judul = "About Me Briefly";
    $foto = 'images/my photo.jpeg';
    $nama = "Amelia Maratus Soleha";
    $tgl = "Sampang, 22 November 2007";
    $Nim = "253107050001";
    $prodi = "D3 Manajemen Informatika";
    $jurusan = "Teknologi Informasi";
    $hobi = "Pencak silat";
    $cita = "Atlet Indonesia";
    $alamat = "Jl. Raya Madupat";
    $hp = "083839296321";

    return view('biodata.biodata', 
    compact('judul', 'foto', 'nama', 'tgl', 'Nim', 'prodi', 'jurusan', 'hobi', 'cita', 'alamat', 'hp'));
});

Route::get('/myskola', function () {
    $judul = "Riwayat Pendidikan";
    $p = "Perjalanan Pendidikan Saya";
    $SD = "SDN 1 Madupat";
    $thn_SD = "2013 - 2019";
    $alamat_SD = "Jl. Raya Madupat";
    $SMP = "SMPN 1 Sampang";
    $thn_SMP = "2019 - 2022";
    $alamat_SMP = "Jl. Raya Madupat";
    $SMk = "SMKN 1 Sampang";
    $thn_SMk = "2022 - 2025";
    $alamat_SMk = "Jl. Syamsul Arifin Sampang";
    $kampus = "Polinema PSDKU Pamekasan";
    $thn_kampus = "2025 - ";
    $alamat_kampus = "Jl. Raya Pademawu, Pamekasan";

    return view('biodata.sekolah', 
    compact('judul', 'p', 'SD', 'thn_SD', 'alamat_SD', 
    'SMP', 'thn_SMP', 'alamat_SMP', 
    'SMk', 'thn_SMk', 'alamat_SMk', 
    'kampus', 'thn_kampus', 'alamat_kampus'));
});

Route::get('/mykeluarga', function () {
    $judul = "Biodata Keluarga";
    $no = "1";
    $nama_ayah = "Tohir";
    $tgl_ayah = "Sampang, 12 Desember 1980";
    $agama_ayah = "Islam";
    $pendidikan_ayah = "SD";
    $pekerjaan_ayah = "Tidak Bekerja/sudah meninggal";
    $no2 = "2";
    $nama_ibu = "Sumiriyah";
    $tgl_ibu = "Sampang, 15 Agustus 1985";
    $agama_ibu = "Islam";
    $pendidikan_ibu = "SD";
    $pekerjaan_ibu = "Wiraswasta";
    $no3 = "3";
    $nama_anak1 = "Amelia Maratus Soleha";
    $tgl_anak1 = "Sampang, 22 November 2007";
    $agama_anak1 = "Islam";
    $pendidikan_anak1 = "Pelajar/Mahasiswa";
    $pekerjaan_anak1 = "Belum Bekerja";
    $no4 = "4";
    $nama_anak2 = "Siti Aisyah";
    $tgl_anak2 = "Sampang, 11 Mei 2011";
    $agama_anak2 = "Islam";
    $pendidikan_anak2 = "Pelajar";
    $pekerjaan_anak2 = "Belum Bekerja";
    $foto1 ='images/photo keluarga.jpeg';
    $foto2 ='images/whit ayah&adek.png';

    return view('biodata.keluarga', compact('judul', 'no', 'nama_ayah', 'tgl_ayah', 'agama_ayah', 'pendidikan_ayah', 'pekerjaan_ayah',
     'no2', 'nama_ibu', 'tgl_ibu', 'agama_ibu', 'pendidikan_ibu', 'pekerjaan_ibu', 
     'no3', 'nama_anak1', 'tgl_anak1', 'agama_anak1', 'pendidikan_anak1', 'pekerjaan_anak1', 
     'no4', 'nama_anak2', 'tgl_anak2', 'agama_anak2', 'pendidikan_anak2', 'pekerjaan_anak2', 'foto1', 'foto2'));
});

Route::get('/myprestasi', function () {
    $judul = "Prestasi dan Penghargaan";
    $p1 = "Halo semuanya, di halaman ini itu berisi prestasi prestasi serta penghargan yang sudah saya raih";
    $p2 = "baik di lingkungan organisasi di akademik dan lomba lomba diluar akademik mulai dari smp hingga kuliah";
    $judul_tbl = "DAFTAR PRESTASI DAN PENGHARGAAN";
    $no = "No";
    $prestasi = "Nama Prestasi/Penghargaan";
    $kegiatan = "Nama Kegiatan";
    $Tingkat = "Tingkat";
    $Penyelenggara = "Penyelenggara";
    $tahun = "Tahun";
    $no1 = "1";
    $prestasi1 = "Juara 1 Tunggal Bersenjata Dewasa Putri";
    $kegiatan1 = "Kejuaraan Pencak Silat Madura sport Championship 2 Piala Bupati Bangkalan";
    $Tingkat1 = "Kabupaten";
    $Penyelenggara1 = "Bupati KabupatenBangkalan";
    $tahun1 = "2026";
    $no2 = "2";
    $prestasi2 = "Juara 1 Seni Tunggal Dewasa Putri ";
    $kegiatan2 = "Kejuaraan Nasional Ikatan Pencak Silat Nurharias";
    $Tingkat2 = "Nasional";
    $Penyelenggara2 = "Ikatan Pencak Silat Nurharias";
    $tahun2 = "2025";
    $no3 = "3";
    $prestasi3 = "Juara 1 Tunggal Bersenjata Dewasa Putri";
    $kegiatan3 = "Kejuaraan Pencak Silat IPSI CUP SAMPANG";
    $Tingkat3 = "Kabupaten";    
    $Penyelenggara3 = "IPSI Sampang";
    $tahun3 = "2025";
    $no4 = "4";
    $prestasi4 = "Sekretaris Kejuaraan";
    $kegiatan4 = "Kejuaraan Nasional Ikatan Pencak Silat Nurharias";
    $Tingkat4 = "Nasional";
    $Penyelenggara4 = "Ikatan Pencak Silat Nurharias";
    $tahun4 = "2025";
    $no5 = "5";
    $prestasi5 = "Peserta O2SN Jawa Timur";
    $kegiatan5 = "Olimpiade Olahraga Siswa Nasional (O2SN) Jawa Timur";
    $Tingkat5 = "nasional/Provinsi";
    $Penyelenggara5 = "Dinas Pendidikan Provinsi Jawa Timur";
    $tahun5 = "2024";
    $no6 = "6";
    $prestasi6 = "Juara 3 Seni Tunggal Tangan Kosong Remaja Putri";
    $kegiatan6 = "Kejuaraan Nasional Pencak Silat IPSI Malang Championship III";
    $Tingkat6 = "Nasional";
    $Penyelenggara6 = "IPSI Malang";
    $tahun6 = "2023";
    $no7 = "7";
    $prestasi7 = "Juara 2 Seni Tunggal Dewasa Putri";
    $kegiatan7 = "Kejuaraan Pencak Silat Bupati Cup IPSI Kabupaten Sampang";
    $Tingkat7 = "Kabupaten";
    $Penyelenggara7 = "Bupati Kabupaten Sampang";
    $tahun7 = "2023";
    $no8 = "8";
    $prestasi8 = "Peserta OSIS Terbaik Kedua ";
    $kegiatan8 = "Latihan Dasar Kepemimpinan Manajemen Siswa (LDKMS)";
    $Tingkat8 = "Sekolah";
    $Penyelenggara8 = "SMPN 2 Camplong";
    $tahun8 = "2020";
    $no9 = "9";
    $prestasi9 = "peserta OSIS Terbaik Ketiga";
    $kegiatan9 = "Latihan Dasar Kepemimpinan Manajemen Siswa (LDKMS)";
    $Tingkat9 = "Sekolah";
    $Penyelenggara9 = "SMPN 2 Camplong";
    $tahun9 = "2021";
    $foto = "images/my photo prestasi.png";

    return view('biodata.prestasi', 
    compact('judul', 'p1', 'p2', 'judul_tbl', 'no', 'prestasi', 'kegiatan', 'Tingkat', 'Penyelenggara', 'tahun', 
        'no1', 'prestasi1', 'kegiatan1', 'Tingkat1', 'Penyelenggara1', 'tahun1', 
        'no2', 'prestasi2', 'kegiatan2', 'Tingkat2', 'Penyelenggara2', 'tahun2', 
        'no3', 'prestasi3', 'kegiatan3', 'Tingkat3', 'Penyelenggara3', 'tahun3', 
        'no4', 'prestasi4', 'kegiatan4', 'Tingkat4', 'Penyelenggara4', 'tahun4', 
        'no5', 'prestasi5', 'kegiatan5', 'Tingkat5', 'Penyelenggara5', 'tahun5', 
        'no6', 'prestasi6', 'kegiatan6', 'Tingkat6', 'Penyelenggara6', 'tahun6', 
        'no7', 'prestasi7', 'kegiatan7', 'Tingkat7', 'Penyelenggara7', 'tahun7', 
        'no8', 'prestasi8', 'kegiatan8', 'Tingkat8', 'Penyelenggara8', 'tahun8', 
        'no9', 'prestasi9', 'kegiatan9', 'Tingkat9', 'Penyelenggara9', 'tahun9', 'foto'));
});