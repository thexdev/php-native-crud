<?php // proses edit member

// panggil koneksi ke database
require_once '../config/database.php';

if (isset($_POST['selesai'])) { // di submit atau tidak ?
	
	// ambil data dari edit_member.php
	$id_member = $_GET['id'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$telepon = $_POST['telepon'];
	$tanggal_bergabung = $_POST['tanggal_bergabung'];
	
	// perbarui data di database
	$query = "UPDATE member SET nama_lengkap = '$nama_lengkap', telepon = '$telepon', tanggal_bergabung = '$tanggal_bergabung' WHERE id_member = '$id_member'";
	$sql = mysqli_query($db, $query);
	
	if ($sql) {
		header('location: ../index.php');
	} else {
		echo "update data gagal";
	}
	
}

?>