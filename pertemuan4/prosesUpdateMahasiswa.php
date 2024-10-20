<?php
include_once('koneksi.php');
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

// echo $id;

// $querySQL = ('update mahasiswa set nama =" $nama", kelas ="$kelas" where id ="$id")');
$execute = mysqli_query($db,"update mahasiswa set nama='$nama', kelas='$kelas' where id='$id'");
// $execute = mysqli_query($db, $querySQL);

header("location: dataMahasiswa.php");

?>