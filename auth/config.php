<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi){
    die('$koneksi gagal: '. mysqli_connect_errno($host, $user, $pass, $db));
}
?>