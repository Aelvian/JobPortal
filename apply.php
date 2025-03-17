<?php 
session_start();
include("config.php");


 if(isset($_GET['id'])){
    $pekerjaan_id = $_GET['id'];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $pelamar_id = $_POST['pelamar_id'];
        $tanggal_melamar = $_POST['tanggal_melamar'];

        $sql = "INSERT INTO lamaran
        (pekerjaan_id, pelamar_id, tanggal_melamar) VALUES ('$pekerjaan_id', '$pelamar_id', '$tanggal_melamar')";
        $query = mysqli_query($db, $sql);

        echo "<p>Succes</p>";
    }

    $sql = "SELECT * FROM pekerjaan WHERE pekerjaan_id=$pekerjaan_id";
    $query = mysqli_query($db, $sql);
    while($pekerja = $query->fetch_assoc()){

    }
    
   while($karyawan = $query->fetch_assoc());
    
 }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lamaran</title>
</head>
<body>
    <h2>Lamaran untuk <?php echo $pekerja['nama_pekerjaan']; ?></h2>
    <form action="prosesapply.php" method="POST">
        <label for="">Pilih Pelamar</label>
        <select name="pelamar_id" id="pelamar_id">
            <option value="<?php echo $karyawan['pelamar_id']; ?>"><?php echo $karyawan['nama_pelamar']; ?></option>
        </select>
    </form>
</body>
</html>