<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&display=swap');
    @import 'style.css';
    </style>
<?php
include 'Form.php';
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];}

    if (isset($_POST['grade'])) {
    $grade = $_POST['grade'];}

    if (isset($_POST['harga'])) {
    $harga = $_POST['harga'];}

    if (isset($_POST['deskripsi'])) {
    $deskripsi = $_POST['deskripsi'];}

$sql = "INSERT INTO sparepart (nama, grade, harga, deskripsi) VALUES ('$nama', '$grade', '$harga', '$deskripsi')";
        if ($conn->query($sql) === TRUE) {
            echo "<h2><em>Data Barang berhasil ditambahkan!🥰</em></h2>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
}
?>
</body>
</html>