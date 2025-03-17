<?php
session_start();
include("config.php");

if(isset($_GET['pekerjaan_id'])){
    $pekerjaan_id = $_GET['pekerjaan_id'];

    $sql = "DELETE FROM pekerjaan WHERE pekerjaan_id = $pekerjaan_id";
    $query = mysqli_query($db, $sql);

    if($query){
        $_SESSION['nontifikasi'] = "Berhasil Di hapus";
    } else {
        $_SESSION['nontifikasi'] = "Gagal dihapus";
    }
    header("Location: index.php");
} else {
    die("Akses ditolak");
}
?>