<?php 
$koneksi=new mysqli("localhost", "root", "");
$sql="create database LayananGizi ";
$q=$koneksi-> query($sql);
if($q){
	echo"Database Sudah Dibuat";
}
else{ echo "Database Gagal Dibuat";
}
$sql2="CREATE TABLE LayananGizi .`pasien`(
  `NoRM` varchar(10) NOT NULL PRIMARY KEY,
  `NoIdPasien` varchar(20) NOT NULL,
  `JenisId` enum('KTP','SIM','Paspor','Lain-lain') NOT NULL,
  `NamaPasien` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `Agama` enum('Islam','Kristen','Hindu','Budha','Katolik') NOT NULL,
  `GolonganDarah` enum('A','B','AB','O') NOT NULL,
  `TanggalLahir` date NOT NULL,
  `JenisKelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `WaktuDaftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$sql3="CREATE TABLE LayananGizi .`layananruang`(
 `NomorRuang` int(11) NOT NULL,
  `NoRM` varchar(10) NOT NULL PRIMARY KEY,
  `WaktuMasuk` datetime NOT NULL,
  `WaktuKeluar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
$sql4="CREATE TABLE LayananGizi .`layanangizi`(
 `IdLayananGizi` int(11) NOT NULL PRIMARY KEY,
  `NoRM` varchar(10) NOT NULL,
  `WaktuLayanan` datetime NOT NULL DEFAULT current_timestamp(),
  `Diet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$sql5="CREATE TABLE LayananGizi . `admin` (
  `idadmin` varchar(34) NOT NULL,
  `namaadmin` varchar(34) NOT NULL,
  `password` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$q2=$koneksi->query($sql2);
 if ($q2) {
	 echo "Tabel Pasien  sudah dibuat !";
 } else {
	 echo "Tabel  Pasien gagal dibuat !"; 
 }

 $q2=$koneksi->query($sql3);
 if ($q2) {
	 echo "Tabel  Layanan Ruang sudah dibuat !";
 } else {
	 echo "Tabel Layanan Ruang  gagal dibuat !"; 
 }

 $q2=$koneksi->query($sql4);
 if ($q2) {
	 echo "Tabel Layanan Gizi sudah dibuat !";
 } else {
	 echo "Tabel Layanan Gizi  gagal dibuat !"; 
 }
  $q2=$koneksi->query($sql5);
 if ($q2) {
   echo "Tabel Layanan Gizi sudah dibuat !";
 } else {
   echo "Tabel Layanan Gizi  gagal dibuat !"; 
 }

 ?>
