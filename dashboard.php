<?php 
require "config.php";

$sql = "SELECT l.*, p.nama_pekerjaan, p1.nama_pelamar FROM lamaran l JOIN pekerjaan p ON l.pekerjaan_id "
?>