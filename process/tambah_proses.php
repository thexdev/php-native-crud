<?php // proses tambah member

// panggil koneksi ke database
require_once '../config/database.php';

if (isset($_POST['selesai'])) { // di submit atau tidak ?

	// gunakan uniqid() biar enggak ribet
	$id_member = uniqid();
	
	// ambil data dari tambah_member.php
	$nama_lengkap = $_POST['nama_lengkap'];
	$telepon = $_POST['telepon'];
	$tanggal_bergabung = $_POST['tanggal_bergabung'];
	
	// masukkan data ke database
	$query = "INSERT INTO member VALUES ('$id_member', '$nama_lengkap', '$telepon', '$tanggal_bergabung')";
	$sql = mysqli_query($db, $query);
	
	if ($sql) {
		header('location: ../index.php');
	} else {
		echo "gagal input data";
	}
	
}

?>