<?php 
	session_start();

	if (isset($_SESSION['adminglo'])) {
		session_destroy();
		echo "<script> alert('Berhasil Logout');
		window.location.href='../login.php' </script>";
	} else {
		echo "<script> alert('Kamu Belum Login');
		window.location.href='../login.php' </script>";
	}
 ?>