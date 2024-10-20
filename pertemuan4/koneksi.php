<?php
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDatabase =  "belajardatabase";

$db = mysqli_connect($namaServer, $username, $password, $namaDatabase);

if ($db === false){
    die("Ada Kesalahan Dalam Koneksi Database: " . mysqli_connect_error());
} 

// else {
//     echo "Koneksi Database Berhasil";
// }
?>