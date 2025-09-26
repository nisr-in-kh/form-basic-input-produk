<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&display=swap');
    @import 'style.css';
    </style>
    <title>Input Barang Onderdil</title>
</head>
<body>
    <h2>🔥Gimana spek barangnya?🔥</h2>
    <h3><em>Input item di sini 👇🏻</em></h3>
<?php
include 'Form.php';
require 'connect.php';

$form = new Form("insertData.php", "Simpan");

$form->addField("nama", "Nama Barang:", "text");
$form->addField("grade", "Grade Barang:", "select", ["Pilih Grade", "A", "B", "C"]);
$form->addField("harga", "Harga Barang:", "text");
$form->addField("deskripsi", "Deskripsi Barang:", "textarea");

$form->displayForm();
?>
</body>
</html>