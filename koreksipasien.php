<!DOCTYPE html>
<html lang="en">
<head>
  <title>Koreksi Pasien</title>
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


<div class="container">
  <br>  <br>
  <h2><center>Cari Nama Pasien</h2></center>
  <form method="post">
    <div class="form-group">
      <label for="NoIdPasien">Ketik No ID Pasien Untuk Mengkoreksi/Mencari</label>
      <input type="text" class="form-control" id="NoIdPasien" placeholder="Ketik No Id Pasien" name="NoIdPasien">
    </div>
      <button type="submit" class="btn btn-primary" name="bkoreksi" onclick="return confirm('Apakah rekord dengan kata kunci yang terpilih dikoreksi ?')">Koreksi</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bkoreksi'])) {
  $NoIdPasien=$_POST['NoIdPasien'];
  $koneksi=new mysqli("localhost","root","","layanangizi");
  $sql="SELECT * FROM pasien WHERE NoIdPasien = '".$NoIdPasien."'";
  $q=$koneksi->query($sql);
  $rekord=$q->fetch_array();
  if (empty($rekord)) {
    echo "Rekord tidak ditemukan !";
    exit();
  } else {
    ?>
<div class="container">
  <h2>Daftar Pasien</h2><br>
  <form method="post">
    <div class="form-group">
      <label for="NoRM">No RM</label>
      <input type="text" class="form-control" id="NoRM"  name="NoRM" value="<?php echo $rekord['NoRM'];?>" readonly>
    </div>
  <div class="form-group">
      <label for="NoIdPasien">No ID Pasien</label>
      <input type="text" class="form-control" id="NoIdPasien"  name="NoIdPasien" value="<?php echo $rekord['NoIdPasien'];?>">
    </div>
    <div class="form-group">
      <label for="JenisId">Jenis ID</label>
      <input type="text" class="form-control" id="JenisId" name="JenisId"
    value="<?php echo $rekord['JenisId'];?>">
    
    </div>
    <div class="form-group">
     <label for="NamaPasien">ID Game</label>
     <input type="text" class="form-control" id="NamaPasien" name="NamaPasien"value="<?php echo $rekord['NamaPasien'];?>">
   </div>
   <div class="form-group">
      <label for="Alamat">Alamat</label>
      <input type="text" class="form-control" id="Alamat" name="Alamat"
    value="<?php echo $rekord['Alamat'];?>">
    </div>
     <div class="form-group">
      <label for="Agama">Agama</label>
      <input type="text" class="form-control" id="Agama" name="Agama"
    value="<?php echo $rekord['Agama'];?>">
    </div> <div class="form-group">
      <label for="GolonganDarah">Golongan Darah</label>
      <input type="text" class="form-control" id="GolonganDarah" name="GolonganDarah"
    value="<?php echo $rekord['GolonganDarah'];?>">
    </div> <div class="form-group">
      <label for="TanggalLahir">Tanggal Lahir</label>
      <input type="text" class="form-control" id="TanggalLahir" name="TanggalLahir"
    value="<?php echo $rekord['TanggalLahir'];?>">
    </div> <div class="form-group">
      <label for="JenisKelamin">Jenis Kelamin</label>
      <input type="text" class="form-control" id="JenisKelamin" name="JenisKelamin"
    value="<?php echo $rekord['JenisKelamin'];?>">
    </div> <div class="form-group">
      <label for="WaktuDaftar">Tanggal Daftar</label>
      <input type="text" class="form-control" id="WaktuDaftar" name="WaktuDaftar"
    value="<?php echo $rekord['WaktuDaftar'];?>">
    </div>
  <br><br> 
   
    <?php
  } //end if empty
}
if (isset($_POST['bSimpan'])) {
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
  $koneksi=new mysqli("localhost","root","","pasien");
  $sql="UPDATE `pasien` SET `NoRM` = '$NoRM', `NoIdPasien` = '$NoIdPasien', `JenisId` = '$JenisId', `NamaPasien` = '$NamaPasien', `Alamat` = '$Alamat', `Agama` = '$Agama', `GolonganDarah` = '$GolonganDarah', `TanggalLahir` = '$TanggalLahir', `JenisKelamin` = '$JenisKelamin', `WaktuDaftar` = '$WaktuDaftar' WHERE `pasien`.`NoIdPasien` = '$NoIdPasien';";
  $q=$koneksi->query($sql);
  if ($q) {
    echo "Rekord user sudah tersimpan !";
  } else {
    echo "Rekord user gagal tersimpan !";
  } 
}
?>
<footer style="

      background-color: rgb(57, 222, 145);
      height: 50px;
      margin-top: 310px;">
   <h2><center><font color="white">@2021 | Ronny Saputra</h2></center></font></center></h2>
</footer>

