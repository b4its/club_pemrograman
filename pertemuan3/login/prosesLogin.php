<?php
session_start();

$validUsername = 'admin';
$validPassword = 'admin123';



$username = $_POST['username'];
$password = $_POST['password'];


if ($username == $validUsername && $password == $validPassword){
    $_SESSION['username'] = $username;
    $_SESSION["messages"] = "selamat datang " . $_SESSION['username'];
    $_SESSION["status"] = "success";
    // echo $_SESSION["messages"];
    // echo $_SESSION['status'];
    header('Location: ../index.php');
} else {

    $_SESSION["messages"] = "Anda telah gagal login";
    $_SESSION["status"] = "error";
    // echo $_SESSION["messages"];
    // echo $_SESSION['status'];
    header('Location: index.php');
    
}



?>