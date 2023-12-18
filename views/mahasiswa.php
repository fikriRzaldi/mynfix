<?php

    require_once('../models/MahasiswaModel.php');
    $mhs = new MahasiswaModel();
   

    if( isset($_POST["cari"])) {
        $data_mahasiswa = $mhs->cari($_POST["keyword"]);
    }else{
        $data_mahasiswa = $mhs->tampil_data_mhs();
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tampil Data Mahasiwa</title>
</head>

<body>    
    <h3>Data Mahasiswa</h3>
    <?php if (isset($_SESSION['is_login'])) { ?>
        <a href="logout.php">Logout</a>
    <?php } ?>
    <a href="tambah_mhs.php">+ Tambah Mahasiswa</a>
    <form action="" method="POST">
    <input id="input" type="text" name="keyword" size="30" autofocus placeholder="Masukkan Keyword" autocomplete="off">
	<button type="submit" name="cari">Cari</button> 
    </form>
    <table border="1">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Program Studi</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        try{
        foreach ($data_mahasiswa as $row) {
        ?>
            <tr>
            <td><?= $no++; ?></td>
                <td><?= $row['id_mhs']; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama_mhs']; ?></td>
                <td><?= $row['prodi_mhs']; ?></td>
                <td>
                    <a href="edit_mhs.php?id_mhs=<?= $row['id_mhs']; ?>">Edit</a>
                    <!-- <a href="hapus.php?id_mhs=<?= $row['id_mhs']; ?>">Hapus</a> -->
                    <a href="../controller/MahasiswaController.php?action=delete_mhs&id_mhs=<?= $row['id_mhs']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
    }catch(e){
        
    }
        ?>
    </table>
</body>

</html>