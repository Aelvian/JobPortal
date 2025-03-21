<?php
include 'config.php';

$sql = "
    SELECT 
        p.nama_pekerjaan, 
        pl.nama_pelamar, 
        l.tanggal_melamar
    FROM 
        lamaran l
    JOIN 
        pekerjaan p ON l.pekerjaan_id = p.pekerjaan_id
    JOIN 
        pelamar pl ON l.pelamar_id = pl.pelamar_id
    ORDER BY 
        l.tanggal_melamar DESC
";

$result = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
</head>
<body>
    <h1>Dashboard Lamaran Pekerjaan</h1>
    <?php if(isset($_SESSION['nontifikasi'])): ?>
        <p><?php echo $_SESSION['nontifikasi']; ?></p>
        <?php unset($_SESSION['nontifikasi']); ?>
        <?php endif; ?>
    <table>
        <tr>
            <th>Nama Pekerjaan</th>
            <th>Nama Pelamar</th>
            <th>Tanggal Melamar</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['nama_pekerjaan']; ?></td>
            <td><?php echo $row['nama_pelamar']; ?></td>
            <td><?php echo $row['tanggal_melamar']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>