<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <form action="prosesregis.php" method="POST">
        <label for="">Nama Pelamar</label>
        <input type="text" name="nama_karyawan" required>
        <label for="">Email</label>
        <input type="email" name="email" required>
        <button type="submit" name="simpan">simpan</button>
    </form>
</body>
</html>