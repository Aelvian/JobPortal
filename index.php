<?php
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>
    <h1>Daftar Job</h1>
    <?php if(isset($_SESSION['nontifikasi'])): ?>
        <p><?php echo $_SESSION['nontifikasi']; ?></p>
        <?php unset($_SESSION['nontifikasi']); ?>
        <?php endif; ?>

        <?php
          $query = $db->query("SELECT * FROM pekerjaan");
          while($pekerja = $query->fetch_assoc()){
        ?>

        <h3><?php echo $pekerja['nama_pekerjaan']; ?></h3>
        <h5><?php echo $pekerja['nama_perusahaan'] ?></h5>
        <p><?php echo $pekerja['alamat'] ?></p>
        <a onclick="retrun confirm('Apakakah Sudah Tidak Terpakai?')"
        href="hapus.php?pekerjaan_id=<?php echo $pekerja['pekerjaan_id'] ?>">Hapus</a>
        <a href="apply.php?id=<?php echo $pekerja['pekerjaan_id'] ?>">Apply</a>
        <?php 
          }
        ?>
</body>
</html>