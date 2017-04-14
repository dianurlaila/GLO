<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Login Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
  <form class="form-inline" align="center" action="proses/proseslogin.php" method="post">
    <img src="foto/logo.jpg" width="400px" height="200px"> <br><br>

      <div class="form-group">
        <label class="sr-only" for="exampleInputUsername3">Username</label>
        <input type="username" name="username" class="form-control" id="exampleInputUsername3" placeholder="Username">
      </div> <br><br>
      <div class="form-group">
        <label class="sr-only" for="exampleInputPassword3">Password</label>
        <input type="password" name="pass" class="form-control" id="exampleInputPassword3" placeholder="Password">
      </div> <br>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div> <br><br>
      <button type="submit" class="btn btn-default">Login</button>
  </form>

</body>
</html>

