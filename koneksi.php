<?php 
class Database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "lsp";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
}
?>