<!DOCTYPE html>
<html lang="en">
<head>
  <title>Koreksi Ruangan Pasien</title>
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
  <h2><center>Cari Ruangan Pasien</h2></center>
  <form method="post">
    <div class="form-group">
      <label for="NomorRuang">Ketik No Ruangan Pasien Untuk Mengkoreksi/Mencari</label>
      <input type="text" class="form-control" id="NomorRuang" placeholder="Ketik No Id Pasien" name="NomorRuang">
    </div>
      <button type="submit" class="btn btn-primary" name="bkoreksi" onclick="return confirm('Apakah rekord dengan kata kunci yang terpilih dikoreksi ?')">Cari</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bkoreksi'])) {
  $NomorRuang=$_POST['NomorRuang'];
  $koneksi=new mysqli("localhost","root","","layanangizi");
  $sql="SELECT * FROM layananruang WHERE NomorRuang = '".$NomorRuang."'";
  $q=$koneksi->query($sql);
  $rekord=$q->fetch_array();
  if (empty($rekord)) {
    echo "Rekord tidak ditemukan !";
    exit();
  } else {
    ?>
<div class="container">
  <h2>Daftar Ruangan Pasien</h2><br>
  <form method="post">
    <div class="form-group">
      <label for="NomorRuang">Nomor Ruangan</label>
      <input type="text" class="form-control" id="NomorRuang"  name="NomorRuang" value="<?php echo $rekord['NomorRuang'];?>" readonly>
    </div>
  <div class="form-group">
      <label for="NoRM">No RM</label>
      <input type="text" class="form-control" id="NoRM"  name="NoRM" value="<?php echo $rekord['NoRM'];?>">
    </div>
    <div class="form-group">
      <label for="WaktuMasuk">Tanggal Daftar</label>
      <input type="text" class="form-control" id="WaktuMasuk" name="WaktuMasuk"
    value="<?php echo $rekord['WaktuMasuk'];?>">
    
    </div>
    <div class="form-group">
     <label for="WaktuKeluar">Tanggal Keluar</label>
     <input type="text" class="form-control" id="WaktuKeluar" name="WaktuKeluar"value="<?php echo $rekord['WaktuKeluar'];?>">
   </div>
  
  <br><br> 
   
    <?php
  } //end if empty
}
if (isset($_POST['bSimpan'])) {
  $NomorRuang=$_POST['NomorRuang'];
  $NoRM=$_POST['NoRM'];
  $WaktuMasuk=$_POST['WaktuMasuk'];
  $WaktuKeluar=$_POST['WaktuKeluar'];
  $koneksi=new mysqli("localhost","root","","layananruang");
  $sql="UPDATE `layananruang` SET `NomorRuang` = '$NomorRuang', `NoRM` = '$NoRM', `WaktuMasuk` = '$WaktuMasuk', `WaktuKeluar` = '$WaktuKeluar' WHERE `layananruang`.`NomorRuang` = '$NomorRuang';";
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
