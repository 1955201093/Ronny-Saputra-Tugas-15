<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pasien</title>
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


<br>
  
</div>
	<br><br><br> <br>
	<h1><center>Input Pasien</h1></center>
	<hr>
	<div class="container">
<form method="post">
  <div class="form-group">
    <label for="NoRM">Nomor RM</label>
    <input type="text" class="form-control" id="NoRM" placeholder="Masukan Nomor RM" name="NoRM">
  </div>
  <div class="form-group">
    <label for="NoIdPasien">Nomor ID Pasien</label>
    <input type="text" class="form-control" id="NoIdPasien" placeholder="Nomor ID Pasien" name="NoIdPasien">
  </div>

    
  <div class="form-group">
  	 <select name="JenisId" class="form-control" id="JenisId">
  	 <option selected disabled>Jenis ID</option>
   	 <option value="KTP">KTP</option>
     <option value="SIM">SIM</option>
     <option value="Paspor">PASPOR</option>
     <option value="Lain-lain">Lain-Lain</option>
  </select>
</div>

<div class="form-group">
    <label for="NamaPasien">Nama Pasien</label>
    <input type="text" class="form-control" id="NamaPasien" placeholder="Ketik Nama Pasien" name="NamaPasien">
  </div>
  <div class="form-group">
    <label for="Alamat">Alamat Pasien</label>
    <input type="text" class="form-control" id="Alamat" placeholder="Alamat Pasien" name="Alamat">
  </div>

  <div class="form-group">
  	 <select name="Agama" class="form-control" id="Agama">
  	 <option selected disabled>Agama</option>
   	 <option value="Islam">Islam</option>
     <option value="Kriten">Kriten</option>
     <option value="Hindu">Hindu</option>
     <option value="Budha">Budha</option>
     <option value="Katolik">Katolik</option>
  </select>
</div>
<div class="form-group">
  	 <select name="GolonganDarah"id="GolonganDarah"  class="form-control">
  	 <option selected disabled>Golongan Darah</option>
   	 <option value="A">A</option>
     <option value="B">B</option>
     <option value="AB">AB</option>
     <option value="O">O</option>
    
  </select>
</div>
<div class="form-group">
    <label for="TanggalLahir">Tanggal Lahir</label>
    <input type="date" name="TanggalLahir" class="form-control" id="TanggalLahir">
  </div>
 <div class="form-group">
  	 <select name="JenisKelamin" id=" JenisKelamin" class="form-control">
  	 <option selected disabled>Jenis Kelamin</option>
   	 <option value="Laki-laki">Laki-laki</option>
     <option value="Perempuan">Perempuan</option>
     <option value="Bencong">Bencong(Hery)</option>
   
  </select>
</div>
<div class="form-group">
    <label for="WaktuDaftar">Tanggal Daftar</label>
 <input type="datetime-local" id="WaktuDaftar" name="WaktuDaftar" class="form-control">
  </div>
<div>
  <button type="submit" class="btn btn-primary" id="simpan" name="simpan">Simpan</button>
</div>
</form>
</div>

<?php  
if (isset($_POST['simpan'])) {
    $NoRM=$_POST['NoRM'];
    $NoIdPasien=$_POST['NoIdPasien'];
    $JenisId=$_POST['JenisId'];
    $NamaPasien=$_POST['NamaPasien'];
    $Alamat=$_POST['Alamat'];
    $Agama=$_POST['Agama'];
    $GolonganDarah=$_POST['GolonganDarah'];
    $TanggalLahir=$_POST['TanggalLahir'];
    $JenisKelamin=$_POST['JenisKelamin'];
    $WaktuDaftar=$_POST['WaktuDaftar'];
    
    $koneksi=new mysqli("localhost","root","","layanangizi");

    $sql="INSERT INTO `pasien`(`NoRM`, `NoIdPasien`, `JenisId`, `NamaPasien`, `Alamat`, `Agama`, `GolonganDarah`, `TanggalLahir`, `JenisKelamin`, `WaktuDaftar`) VALUES ('".$NoRM."','".$NoIdPasien."', '".$JenisId."','".$NamaPasien."','".$Alamat."','".$Agama."','".$GolonganDarah."','".$TanggalLahir."','".$JenisKelamin."','".$WaktuDaftar."');";
    
        $q=$koneksi->query($sql);
        if ($q) {
            echo "<h2><center>Pasien Telah Terdaftar !</center></h2>";
        } else {
            echo "<h2><center>Pasien Gagal Terdaftar !</center></h2>";
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