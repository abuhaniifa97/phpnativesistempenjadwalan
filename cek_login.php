<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'config/koneksi.php';
// include 'model/database.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

// Session
$_SESSION ["login"] = true;

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['role']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/dashboardadmin.php");

	// cek jika user login sebagai murid
	}else if($data['role']=="murid"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "murid";
		// alihkan ke halaman dashboard pegawai
		header("location:murid/dashboardmurid.php");

	// cek jika user login sebagai guru
	}else if($data['role']=="guru"){
		// buat session login dan username
		$_SESSION['username'] = $data['username'];
		$_SESSION['role'] = "guru";
		// alihkan ke halaman dashboard pengurus
		header("location:guru/dashboardguru.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>