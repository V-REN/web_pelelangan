<?php 
session_start();
include '../koneksi/koneksi.php';

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$perintah = "SELECT * FROM masyarakat WHERE username = '$username' AND password = '$password'";
	$eksekusi = $koneksi->query($perintah);
	$cek = $eksekusi->num_rows;
	$data = $eksekusi->fetch_array();

	$perintah1 = "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'";
	$eksekusi1 = $koneksi->query($perintah1);
	$cek1 = $eksekusi1->num_rows;
	$data1 = $eksekusi1->fetch_array();

	var_dump($data);
}
 ?>		