<?php 
$server = "localhost";
$user = "root";
$pass = "Aelvian2222";
$db = "job_portal";

$db = new  mysqli($server, $user, $pass, $db);

if(!$db){
    die("Tidak Tersambung" . mysqli_connect_error());
}
?>