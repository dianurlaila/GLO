<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style type="text/css">
		h3{
			text-align: center;
			padding: 30px;
			font-family: calibri;
			font-size: 50px;
			color: white;
		}

		.image{
			margin-top: 50px;
			margin-left: 20px;
			padding: 5px;
			width: 300px;
			height: 300px;
			border: 2px solid;
			border-radius: 100%;
			float: center;
		}

		img{
			width: 150px;
			height: 150px;
			border-radius: 100%;
		}

	</style>
</head>


<body background="foto/3.jpg">
	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">GLO (Go onLine Order)</a>
			</div>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="proses/proseslogout.php"><span class="glyphicon glyphicon-log-in"></span>LOGOUT</a></li>
			</ul>
		</div>
	</nav>
	<div class="container" align="center">

		<h3>WELCOME ADMIN</h3>
		<a href="datapesanan.php"><img src="foto/1.jpg" alt="" class="image"></a>
		<a href="makananminumanpaket.php"><img src="foto/2.jpg" class="image"></a>
	</div>

	
</body>
</html>

