<?php 
	include 'koneksi.php';

	$username = $_POST['username'];
	$pass = $_POST['pass'];


	$query = "SELECT username, password FROM tb_admin WHERE username='$username' and password='$pass'";
	$sql = mysql_query($query);
	$hasil = mysql_fetch_array($sql);

	if ($hasil) {
		session_start();
		$_SESSION['adminglo']=$username;
		echo "<script> alert('Yes Berhasil Login');
		window.location.href='../dashboard.php' </script>";
	} else {
		echo "<script> alert('Gagal Login');
		window.location.href='../login.php' </script>";
	}

 ?>