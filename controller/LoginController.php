<?php

include('../models/LoginModel.php');
$log = new LoginModel();
$koneksi = new database();

// if(isset($_SESSION["login"])){
// 	header("location:homepage.php");
// }
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
$log->cek($username, $password);
?>