<?php

// file koneksi ke database

$server = "localhost"; // nama server yang temen-temen gunain. Ini default value kalau pake XAMPP.
$username = "root";
$password = ""; // sesuaikan dengan pasaword temen-temen :)
$database = "incgrup"; // nama database yang digunakan.

// koneksi ke database
@$db = mysqli_connect($server, $username, $password, $database);

// terkoneksi atau belum ?
if (!$db) {
	die("Gagal koneksi ke database : ".mysqli_connect_error());
}

/*

NOTE :
======
Jika database tidak terkoneksi, maka akan tampil
tulisan "Gagal koneksi ke database" beserta error-nya.
Jika terkoneksi, maka tidak akan muncul tulisan apapun.

*/