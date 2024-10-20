<?php
include_once('koneksi.php');
$id = $_GET['id'];

$querySQL = 'delete from mahasiswa where id="'.$id.'"';
$execute = mysqli_query($db, $querySQL);
if ($execute){
    header("location: dataMahasiswa.php");
}
?>