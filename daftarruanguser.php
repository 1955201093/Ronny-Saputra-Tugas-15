<!DOCTYPE html>
<html lang="en">
<head>
  <title>APLIKASI RUMAH SAKIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style type="text/css">
    footer{
      background-color: rgb(57, 222, 145);
  
      height: 50px;
      margin-top: 310px;
    }
    
.heder{
  width: cover;
  height: 80px;
  text-align: center;
  background-color: rgb(57, 222, 145);
}
.samping{
  width: 700px;
  height: 100%;
  font-color: lightgreen;
}

.selamat{
  text-align: center;
  font-family: sans-serif;
  font-display: block;
 font-size: 50px;
}
.text{
  font-size: 50px;
  text-decoration: bold;
}

  </style>

</head>
<body>
 <div class="heder">
    <p class="text" >APLIKASI RUMAH SAKIT</p></div>

<nav class="navbar navbar-expand-sm bg-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php"> Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="daftarruanguser.php">Info Ruangan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="daftarpasienuser.php">Info Pasien</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="daftargiziuser.php">Info Gizi</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="login.php"><b>Login</b></a>
    </li>
     <li class="nav-item">
        <div class="samping">
        <a class="nav-link"><marquee behavior="scroll" direction="left" onmouseover="stop()" onmouseout="start()"> Selamat Datang</a></div></marquee>
      </li> 
        
  </ul>
</nav>
<br>
<?php 
$koneksi=new mysqli("localhost","root","","layanangizi");
$sql="SELECT * FROM `layananruang`";
$q=$koneksi->query($sql);
$rekord=$q->fetch_array();
?>
	<div class="container">
  <h2> <CENTER>Daftar Ruangan pasien</h2></CENTER>
            <br>
            <br>  
  <table class="table table-bordered table-striped">
    <thead>
      <tr class="color">
        <th>No Ruangan </th>
        <th>NoRM</th>
        <th>Tanggal daftar </th>
        <th>Tanggal Keluar </th>
      </tr>

</div>
  </thead>
  <tbody><?php do { ?>
      <tr>
        <td><?php echo $rekord['NomorRuang'];?></td>
         <td><?php echo $rekord['NoRM'];?></td>
        <td><?php echo $rekord['WaktuMasuk'];?></td>
        <td><?php echo $rekord['WaktuKeluar'];?></td>
      </tr><?php } while($rekord =$q->fetch_array());?>
    </tbody>
</table>

<footer >
   <h2><center><font color="white">@2021 | Ronny Saputra</h2></center></font></center></h2>
</footer>
</body>
</html>
