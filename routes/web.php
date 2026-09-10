<?php

use Illuminate\Support\Facades\Route;

Route::get('/amel', function () {
    return view('welcome');
});

Route::get('/luqman_ganteng', function () {
    return view('malang');
});

Route::get('/biodatagw', function () {   
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
    compact('judul', 'SD', 'thn_SD', 'alamat_SD', 'SMP', 'thn_SMP', 'alamat_SMP', 'SMk', 'thn_SMk', 'alamat_SMk', 'kampus', 'thn_kampus', 'alamat_kampus'));
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