<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_peminjaman";

$koneksi = mysql_connect($host, $user, $password) or die("Koneksi ke database gagal");
mysql_select_db($database, $koneksi);
?>
