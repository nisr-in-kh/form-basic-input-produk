<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Buat Akun, Dong!🫵🏻</title>
</head>
<body>
    <h3><em>Siapa Anda? Buat akun dulu.</em></h3>
    <form action="insertData.php" method="POST">
    <label for="nama_admin">Nama Admin:</label>
    <input type="text" id="nama_admin" name="nama_admin" required><br></br>

    <label for="pass_admin">Password Admin:</label>
    <input type="password" id="pass_admin" name="pass_admin" required><br></br>

    <button type="submit" formaction="input_katalog.php">SUBMIT</button>

</body>
</html>