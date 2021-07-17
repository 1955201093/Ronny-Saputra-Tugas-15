<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
    .reg{
      background-color: lightblue;
      width: 80px;
      height: 60px;
      text-align: center;
      font-size: 20px;
      padding: 5px;
      margin-top: 20px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Form Login</h2>
  <form method="post">
    <div class="form-group">
      <label for="kodeadmin">Nomor Admin</label>
      <input type="text" class="form-control" id="kodeadmin" placeholder="Nomor Admin" name="kodeadmin" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="pswd">Password</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required>
    </div>
    
    <button type="submit" class="btn btn-primary" name="blogin">Login</button>
    <a class="reg" href="register.php">Register</a>
  </form>
</div>

</body>
</html>
<?php
if (isset($_POST['blogin'])) {
	$kodeadmin=filter_var($_POST['kodeadmin'],FILTER_SANITIZE_STRING);
	$pswd=filter_var($_POST['pswd'],FILTER_SANITIZE_STRING);
	$koneksi=new mysqli('localhost','root','','layanangizi');
	$sql="select * from admin where kodeadmin  = '".$kodeadmin."' and password='".$pswd."'";
	$q=$koneksi->query($sql);
	$r=$q->fetch_array();
	if (empty($r)) {
		echo "Maaf anda tidak terdaftar !";
		exit();
	} else {
		echo "<script>window.location.href='admin.html';</script>";
	}
}

?>