<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pekerjaan</title>
</head>
<body>
    <h3>Tambah Pekerjaan</h3>
    <form action="prosestambah.php" method="POST">
        <label for="">Nama Pekerjaan</label>
        <input type="text" name="nama_pekerjaan" required>
        <label for="">Nama Perusahaan</label>
        <input type="text" name="nama_perusahaan" required>
        <label for="">Alamat</label>
        <input type="text" name="alamat" required>
        <button type="submit" name="simpan">Add Job</button>
    </form>
</body>
</html>