<?php
$conn = new mysqli("localhost", "root", "", "db1_berkahonderdil");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>