<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Katalog</title>
</head>
<body>
    <h1><em>Input item di sini 👇🏻</em></h1>
    <form action="insertData.php" method="POST">
    <label for="nama">Nama barang:</label>
    <input type="text" id="nama" name="nama" required><br></br>

    Grade: <select name="grade" id="grade">
        <option value="">Pilih Grade</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
    </select><br></br>

    <label for="nama">Harga barang:</label>
    <input type="text" id="harga" name="harga"><br></br>

    Deskripsi barang: <textarea name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi barang..." required></textarea><br></br>
    
    <input type="submit" value="Kirim Data">
</form>
</body>
</html>