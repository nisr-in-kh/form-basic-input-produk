<?php
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama_admin = "";
    $pass_admin = "";

    if (isset($_POST['nama_admin'])) {
    $nama_admin = $_POST['nama_admin'];}

    if (isset($_POST['pass_admin'])) {
    $pass_admin = $_POST['pass_admin'];}

    if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];}

    if (isset($_POST['grade'])) {
    $grade = $_POST['grade'];}

    if (isset($_POST['harga'])) {
    $harga = $_POST['harga'];}

    if (isset($_POST['deskripsi'])) {
    $deskripsi = $_POST['deskripsi'];}

$sql = "INSERT INTO admin (nama_admin, pass_admin) VALUES ('$nama_admin', '$pass_admin')";
        if ($conn->query($sql) === TRUE) {
            echo "Data Admin berhasil ditambahkan!🥰";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

$sql = "INSERT INTO sparepart (nama, grade, harga, deskripsi) VALUES ('$nama', '$grade', '$harga', '$deskripsi')";
        if ($conn->query($sql) === TRUE) {
            echo "Data Barang berhasil ditambahkan!🥰";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
}
?>