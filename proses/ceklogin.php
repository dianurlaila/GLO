<?php 
	session_start();

	if (!isset($_SESSION['adminglo'])) {
		echo "<script> alert('anda belum Login');
		window.location.href='login.php' </script>";
	} else {
		$user = $_SESSION['adminglo'];
	}
 ?>