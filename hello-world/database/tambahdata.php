<?php
include 'koneksi.php';

// Contoh data untuk insert (bisa diganti dari input form)
$nama = "Tiara";
$email = "tiara@example.com";

// Query untuk menambahkan data ke tabel users
$sql = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
