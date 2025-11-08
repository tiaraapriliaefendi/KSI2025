<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_latihan"; // ganti sesuai nama database kamu

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil!";
}
?>
