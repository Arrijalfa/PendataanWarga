<?php
session_start();
if(!isset($_SESSION['user'])) {
	//jika user belum login
	header('Location:../login');
	exit();
}

include('../../config/koneksi.php');

//ambil data dari form
$id_warga = htmlspecialchars($_GET['id_warga']);
$id_keluarga=htmlspecialchars($_GET['id_keluarga']);

//delete database
$query="DELETE FROM warga_has_kartu_keluarga WHERE id_warga = $id_warga and id_keluarga=$id_keluarga";
$hasil = mysqli_query($db, $query);

// cek keberhasilan penambahan data
if ($hasil==true) {
	echo "<script>window.location.href='../kartu-keluarga/edit-anggota.php?id_keluarga=$id_keluarga'</script>";
}