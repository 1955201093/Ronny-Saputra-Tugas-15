<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <style type="text/css">
   body{
    background-color: #404040;

   }
   .gs{
    width: 500px; 
    background-color: #FF0000;
    border: 0;
    height: 30px;
    text-align: center;
    object-radius: 10px;
   }

 </style>
</head>
<body>

  <br><br>
<font color="white">
<div class="container">
  <center><h2>Daftar Anggota</h2></center>
  <form method="post">
    <div class="form-group">
      <label for="noadmin">No Admin</label>
      <input type="text" class="form-control" id="noadmin" placeholder="Enter Nama Pengguna" name="noadmin">
    </div>
    <div class="form-group">
      <label for="namaadmin">Nama Admin</label>
      <input type="text" class="form-control" id="namaadmin" placeholder="Enter Nama Pengguna" name="namaadmin">
    </div>
	<div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" >
    </div>
    
    <div>
    <center><button type="submit" class="btn btn-primary" style="  background-color: #FF0000; border: 0;" name="bsimpan" id="bsimpan">Daftar</button><br></center><br>

    <center><a href="login.php" ><div class="gs"><font color="white">Login<br></a></center></font></div>

  </form>
</div>
</body>
</html>
<br>
<?php if (isset($_POST['bsimpan'])) {
  $noadmin=filter_var($_POST['noadmin'],FILTER_SANITIZE_STRING);
	$namaadmin=filter_var($_POST['namaadmin'],FILTER_SANITIZE_STRING);
	$password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);

	$koneksi=new mysqli("localhost","root","","layanangizi");
	$sql="INSERT INTO `admin`(`noadmin`, `namaadmin`, `password`) VALUES ('".$noadmin ."','".$namaadmin."','".$password."')";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "<h2>Anda Sudah Terdaftar !</h2>";
	} else {
		echo "<h2>Anda gagal Terdaftar !</h2>";
	}
}
?>