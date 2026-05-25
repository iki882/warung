<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "warung_nusantara";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi){
    die('$koneksi gagal: '. mysqli_connect_errno($host, $user, $pass, $db));
}
?>