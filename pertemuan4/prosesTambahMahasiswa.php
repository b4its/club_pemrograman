<?php
include_once('koneksi.php');
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$querySQL = 'insert into mahasiswa (nama, kelas) values("'.$nama.'", "'.$kelas.'")';
$execute = mysqli_query($db, $querySQL);
if ($execute){
    header("location: dataMahasiswa.php");
}

?>