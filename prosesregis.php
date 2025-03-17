<?php
session_start();
include("config.php");

if(isset($_POST['simpan'])){

    $nama_pelamar = $_POST['nama_pelamar'];
    $email = $_POST['email'];

    $sql = "INSERT INTO pelamar 
    (nama_pelamar, email) VALUES ('$nama_pelamar', '$email')";

    $query = mysqli_query($db, $sql);

    if($query){
        $_SESSION['nontifikasi'] = "Registrasi Berhasil";
    } else {
        $_SESSION['nontifikasi'] = "Registrasi gagal";
    }
    header("Location: index.php");
} else {
    die("Akses Ditolak");
}
?>