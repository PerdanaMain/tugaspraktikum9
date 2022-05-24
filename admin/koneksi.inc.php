<?php
//Membuat Koneksi Ke database
$host   = "localhost";
$user   = "root";
$pass   = "";
$dbname = "p-kontak";

$conn = mysqli_connect($host,$user, $pass,$dbname) or die("Gagal Terhubung dengan database ".$dbname.mysqli_connect_error());
?>