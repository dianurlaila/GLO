<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama =$_POST['nama'];
$harga = $_POST['harga'];

$x = $_POST['x'];
$foto= $_FILES['foto']['name'];

if(!$foto==""){	
	$tmp = $_FILES['foto']['tmp_name'];
	$path ="../gambar/menu/".$foto;
	unlink("../gambar/menu/".$x);
	move_uploaded_file($tmp, $path);
}else{
	$foto = $x;

}


$query = "UPDATE tb_menu SET nama='$nama', harga='$harga', foto='$foto', id_bus='$nama_bus' WHERE id= '$id'";
$sql = mysql_query($query);
if($sql){
	echo "<script> alert('berhasil Update Menu!!');
	window.location.href='../listbus.php' </script>";
}else{
	echo "<script> alert('Gagal Update Menu!!');
	window.location.href='../listbus.php' </script>";
}
?>