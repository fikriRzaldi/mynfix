<?php

include('../models/MahasiswaModel.php');
$mhs = new MahasiswaModel();
$koneksi = new database();
$action = $_GET['action'];

   
        if ($action == "add_mhs") {
            $mhs->tambah_mhs($_POST['nim'], $_POST['nama_mhs'], $_POST['prodi_mhs']);
            header('location:../views/mahasiswa.php');
        } elseif ($action == "update_mhs") {
            $mhs->update_mhs($_POST['nim'], $_POST['nama_mhs'], $_POST['prodi_mhs'], $_POST['id_mhs']);
            header('location:../views/mahasiswa.php');
        } elseif ($action == "delete_mhs") {
            $id_mhs = $_GET['id_mhs'];
            $mhs->delete_mhs($id_mhs);
            header('location:../views/mahasiswa.php');
        } 
