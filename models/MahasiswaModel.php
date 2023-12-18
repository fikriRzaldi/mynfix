<?php
include('../koneksi.php');
class MahasiswaModel extends Database{
	
    function tampil_data_mhs()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_mahasiswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function cari($keyword){
		try{
		$data = mysqli_query($this->koneksi,"SELECT * FROM tb_mahasiswa WHERE nim LIKE '%$keyword%' OR nama_mhs LIKE '%$keyword%' OR prodi_mhs LIKE '%$keyword%'");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
			return $hasil;
		}
		}catch(e){
			echo"adasdads";
		}
	}
    function tambah_mhs($nim,$nama_mhs,$prodi_mhs)
	{
		mysqli_query($this->koneksi,"insert into tb_mahasiswa values ('','$nim','$nama_mhs','$prodi_mhs')");
	}

	function get_by_id_mhs($id_mhs)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_mahasiswa where id_mhs='$id_mhs'");
		return $query->fetch_array();
	}

	function update_mhs($nim, $nama_mhs, $prodi_mhs, $id_mhs)
	{
		mysqli_query($this->koneksi,"update tb_mahasiswa set nim='$nim', nama_mhs='$nama_mhs', prodi_mhs='$prodi_mhs' where id_mhs='$id_mhs'");
	}

	function delete_mhs($id_mhs)
	{
		mysqli_query($this->koneksi,"delete from tb_mahasiswa where id_mhs='$id_mhs'");
	}

}