<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <hr />
    <form method="post" action="../controller/MahasiswaController.php?action=add_mhs">
        <table>
            <tr>
                <td>Nomor Induk Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="nim" /></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="nama_mhs" /></td>
            </tr>
            <tr>
                <td>Prodi Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="prodi_mhs" /></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tombol" value="Simpan" /></td>
            </tr>
        </table>
    </form>
</body>

</html>