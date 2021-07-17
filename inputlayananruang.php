<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ruang</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Kamar</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Info Gizi <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="daftargizi.php">Daftar Gizi</a></li>
          <li><a href="inputdatagizi.php">Input Gizi</a></li>
          <li><a href="hapuslayanan.php">Hapus Gizi</a></li>
          <li><a href="koreksilayanan.php">Cari Gizi</a></li>
        </ul>
      </li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Info Pasien <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="daftarpasien.php">Daftar Pasien</a></li>
          <li><a href="inputpasien.php">Input Pasien</a></li>
          <li><a href="hapuspasien.php">Hapus Pasien</a></li>
          <li><a href="koreksipasien.php">Cari Pasien</a></li>
        </ul>
      </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Info Ruang <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="daftarruang.php">Daftar Ruang</a></li>
          <li><a href="inputlayananruang.php">Input Ruang</a></li>
          <li><a href="hapusruang.php">Hapus Ruang</a></li>
          <li><a href="koreksiruangan.php">Cari Ruang</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

  
</div>
	<br>
	<h1><center>Input Daftar Ruangan</h1></center>
	<hr>
	<div class="container">
<form method="post">
  <div class="form-group">
    <label for="NomorRuang">Nomor Ruangan Pasien</label>
    <input type="text" class="form-control" id="NomorRuang" placeholder="Masukan Nomor Ruangan Pasien" name="NomorRuang">
  </div>
  <div class="form-group">
    <label for="NoRM">Nomor RM</label>
    <input type="text" class="form-control" id="NoRM"  name="NoRM">
  </div>
<div class="form-group">
    <label for="WaktuMasuk">Tanggal Masuk</label>
 <input type="datetime-local" id="WaktuMasuk" name="WaktuMasuk" class="form-control">
  </div>
  <div class="form-group">
    <label for="WaktuKeluar">TanggalKeluar</label>
 <input type="datetime-local" id="WaktuKeluar" name="WaktuKeluar" class="form-control">
  </div>
<div>
  <button type="submit" class="btn btn-primary" id="simpan" name="simpan">Simpan</button>
</div>
</form>
</div>

<?php  
if (isset($_POST['simpan'])) {
    $NomorRuang=$_POST['NomorRuang'];
    $NoRM=$_POST['NoRM'];
    $WaktuMasuk=$_POST['WaktuMasuk'];
    $WaktuKeluar=$_POST['WaktuKeluar'];
    
    $koneksi=new mysqli("localhost","root","","layanangizi");

    $sql="INSERT INTO `layananruang`(`NomorRuang`, `NoRM`, `WaktuMasuk`, `WaktuKeluar`) VALUES ('".$NomorRuang."','".$NoRM."', '".$WaktuMasuk."','".$WaktuKeluar."');";
    
        $q=$koneksi->query($sql);
        if ($q) {
            echo "<h2><center>Ruangan Telah Terdaftar !</center></h2>";
        } else {
            echo "<h2><center>Ruangan Gagal Terdaftar !</center></h2>";
        }   
    }
    ?> 
    <footer style="

      background-color: rgb(57, 222, 145);
      height: 50px;
      margin-top: 310px;">
   <h2><center><font color="white">@2021 | Ronny Saputra</h2></center></font></center></h2>
</footer>
 </body>
</html>