<<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
	<script type="text/javascript" src="js/jquery-1.12.2.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="dashboard.php">GLO (Go onLine Order)</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="makananminumanpaket.php">Tambah Makanan</a></li>
				<li><a href="tambahminuman.php">Tambah Minuman</a></li>
				<li><a href="tambahpaket.php">Tambah Paket</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="proses/proseslogout.php"><span class="glyphicon glyphicon-log-in"></span>LOGOUT</a></li>
			</ul>
		</div>
	</nav>

	<form class="form-horizontal" method="post" action="listmenu.php">
		<div class="form-group">
			<label class="col-sm-2 control-label">Nama Makanan</label>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Makanan" required>
			</div>
		</div>


		<div class="form-group">
			<label class="col-sm-2 control-label">Harga Makanan</label>
			<div class="col-sm-7">
				<input type="number" class="form-control" name="harga" maxlength="50" placeholder="Masukkan Harga Makanan" required>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Masukkan Foto</label>
			<div class="col-sm-7">
				<input type="file" name="gambar"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Detail Makanan</label>
			<div class="col-sm-7">
				<textarea class="form-control" rows="5" id="comment" placeholder="Masukkan Detail Makanan" required></textarea>
			</div> 
		</div>

		<div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default"><a href="listmenumakanan.php">Tambah List Menu</button>
				<a href="dashboard.php">Cancel</a>
			</div>
		</div><br><br><br><br><br><br><br><br><br>

		<footer align="center">
			Copyright &copy DianOjaMike : GLO (Go onLine Order)<br>
			Jalan Kaliurang km.14,5 Telp : 0778412328 <br>
			E-mail : goonlineorder@gmail.com
		</footer>
	</form>
</body>
</html>