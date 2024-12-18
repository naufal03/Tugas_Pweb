<?php
// Konfigurasi database
$host     = "localhost"; // Host database
$username = "root";      // Username database
$password = "";          // Password database (kosong jika default)
$dbname   = "nama_database"; // Nama database

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $dbname);

// Periksa koneksi
if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}

// Jika berhasil
echo "Koneksi berhasil!";
