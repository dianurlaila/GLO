<?php 
include("koneksi.php");

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$foto= $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$path ="../gambar/menu/".$foto;	


if(move_uploaded_file($tmp, $path)){

	$query = "INSERT INTO tb_menu (nama, harga, foto) VALUES ('$nama','$harga','$foto')";

	$sql = mysql_query($query);

	if($sql){
		echo "<script> alert('Berhasil Tambah Menu');
		window.location.href='../listmenu.php'; </script>";
	}else{
		echo "<script> alert('Gagal Tambah Menu');
		window.location.href='../listmenu.php'; </script>";
	}
}
?>

