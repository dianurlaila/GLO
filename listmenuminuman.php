<?php 
include 'proses/koneksi.php';
include 'proses/ceklogin.php';
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title>LIST MENU MINUMAN</title>
	

</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="dashboard.php">GLO (Go onLine Order)</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="listmenumakanan.php">List Makanan</a></li>
				<li class="active"><a href="listmenuminuman.php">List Minuman</a></li>
				<li><a href="listmenupaket.php">List Paket</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="proses/proseslogout.php"><span class="glyphicon glyphicon-log-in"></span>LOGOUT</a></li>
			</ul>
		</div>
	</nav>
	<table class="table">

		<thead align="center">
			<td><b>Nama Minuman</b></td>
			<td><b>Harga Minuman</b></td>
			<td><b>Gambar</b></td>
			<td><b>Detail Minuman
				<td colspan="2"><b>Aksi</b></td>
			</thead>

			<tbody>

				<?php 
				$query="SELECT * FROM tb_menu";
				$sql = mysql_query($query);
				while($hasil = mysql_fetch_array($sql)){
					$nama = $hasil['nama'];
					$harga = $hasil['harga'];
					$foto = $hasil['foto'];
					$detail_makanan = $hasil['detail_makanan'];

					echo "<tr>";
					echo "<td>$nama</td>";
					echo "<td>$harga</td>";
					echo "<td><img width='100px' height='50px' src='gambar/menu/$foto'></td>";
					echo "<td><a href='proses/proseseditmenu.php?id=$id'>Edit</a></td>";
					echo "<td><a href='proses/proseshapusmenu.php?id=$id'>Hapus</a></td>";
					echo "</tr>";
				}
				?>
			</tbody>
		</table>

	</body>
	</html>



