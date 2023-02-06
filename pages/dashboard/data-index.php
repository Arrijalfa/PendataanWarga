<?php

include('../../config/koneksi.php');

//hitung warga
$query_warga="SELECT COUNT(*) AS total FROM warga";
$hasil_warga=mysqli_query($db, $query_warga);
$jumlah_warga=mysqli_fetch_assoc($hasil_warga);

// hitung warga laki-laki
$query_warga_l = "SELECT COUNT(*) AS total FROM warga WHERE jenis_kelamin_warga = 'L'";
$hasil_warga_l = mysqli_query($db, $query_warga_l);
$jumlah_warga_l = mysqli_fetch_assoc($hasil_warga_l);

//hitung warga perempuan
$query_warga_p = "SELECT COUNT(*) AS total FROM warga WHERE jenis_kelamin_warga = 'P'";
$hasil_warga_p = mysqli_query($db, $query_warga_p);
$jumlah_warga_p = mysqli_fetch_assoc($hasil_warga_p);

//hitung warga >=17 tahun
$query_warga_ld_17 = "SELECT COUNT(*) AS total FROM warga where TIMESTAMPDIFF (YEAR, tanggal_lahir_warga, CURDATE()) >= 17 AND tanggal_lahir_warga != '0000-00-00'";
$hasil_warga_ld_17 = mysqli_query($db, $query_warga_ld_17);
$jumlah_warga_ld_17 = mysqli_fetch_assoc($hasil_warga_ld_17);

//hitung warga <17 tahun
$query_warga_kd_17 = "SELECT COUNT(*) AS total FROM warga where TIMESTAMPDIFF (YEAR, tanggal_lahir_warga, CURDATE()) < 17 AND tanggal_lahir_warga != '0000-00-00'";
$hasil_warga_kd_17 = mysqli_query($db, $query_warga_kd_17);
$jumlah_warga_kd_17 = mysqli_fetch_assoc($hasil_warga_kd_17);

//hitung data keluarga
$query_kartu_keluarga = "SELECT COUNT(*) AS total FROM kartu_keluarga";
$hasil_kartu_keluarga = mysqli_query($db, $query_kartu_keluarga);
$jumlah_kartu_keluarga = mysqli_fetch_assoc($hasil_kartu_keluarga);
