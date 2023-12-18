<?php
include('../koneksi.php');
class LoginModel extends Database{

    function cek($username, $password){
        $result = mysqli_query($this->koneksi, "SELECT * FROM user WHERE username='$username'")
        or die("Could not execute the select query.");
    if ($row = mysqli_fetch_assoc($result)) {
        $hashed_password = $row['password'];
        $id = $row['id'];
        header('Location:../views/mahasiswa.php');
        if ($hashed_password == $password ) {
            $_SESSION['is_login'] = $username;
            $_SESSION['id'] = $id;
        } else {
            header("location:../views/index.php?pesan=password salah");
        }
    } else {
        header("location:../views/index.php?pesan=username salah");
    }
    }
}