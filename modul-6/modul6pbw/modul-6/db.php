<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "modul6pbw";

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
