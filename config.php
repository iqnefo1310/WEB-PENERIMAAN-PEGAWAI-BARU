<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'penerimaan_pegawai_db';

// Koneksi database
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>