<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_pelamar = $_POST['nama_pelamar'];
    $email = $_POST['email'];
    $pekerjaan_id = $_POST['pekerjaan_id'];

    // Insert pelamar
    $sql = "INSERT INTO pelamar (nama_pelamar, email) VALUES ('$nama_pelamar', '$email')";
    if ($db->query( $sql)) {
        $pelamar_id = $db->insert_id;

        // Insert lamaran
        $sql = "INSERT INTO lamaran (pekerjaan_id, pelamar_id, tanggal_melamar) VALUES ('$pekerjaan_id', '$pelamar_id', CURDATE())";
        if ($db->query($sql)) {
           $_SESSION['nontifikasi'] = "Berhasil dikirim";
        } else {
            $_SESSION['nontifikasi'] = "gagal dikirim";
        }
    } else {
        $_SESSION['nontifikasi'] = "Error";
    }
    header("Location: dashboard.php");
}

$pekerjaan_id = $_GET['id'];
$sql = "SELECT * FROM pekerjaan WHERE pekerjaan_id = $pekerjaan_id";
$result = $db->query($sql);
$row = $result->fetch_assoc();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Job</title>
   
</head>
<body>
    <h1>lamaran untuk <?php echo $row['nama_pekerjaan']; ?></h1>
    <form method="POST">
        <input type="hidden" name="pekerjaan_id" value="<?php echo $pekerjaan_id; ?>">
        <label for="nama_pelamar">Nama Pelamar:</label>
        <input type="text" id="nama_pelamar" name="nama_pelamar" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Apply</button>
    </form>
</body>
</html>
