<?php 
	include 'koneksi.php';

	$id= $_GET['id'];
	$query2="SELECT foto FROM tb_menu WHERE id=$id";
	$sql2=mysql_query($query2);
	$hasil = mysql_fetch_array($sql2);
	$path="../gambar/".$hasil['foto'];
	$query = "DELETE FROM tb_menu WHERE id=$id";
	$sql = mysql_query($query);

	if($sql){
			unlink($path);
			echo "<script> alert('berhasil Hapus data!!');
			window.location.href='../dashboard.php' </script>";
		}else{
			echo "<script> alert('Gagal Hapus data!!');
			window.location.href='../dashboard.php' </script>";
		}
 ?>