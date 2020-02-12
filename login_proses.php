<?php
session_start();
include "connection.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi, "SELECT * FROM user where username='$username' AND password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin/index.php");
}else{
    header("location:login.php?pesan=gagal");
}

?>