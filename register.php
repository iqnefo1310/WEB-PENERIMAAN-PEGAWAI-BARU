<?php
require 'config.php';

if (isset($_POST['register'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    $query = "INSERT INTO users (username, password) VALUES ('$username', MD5('$password'))";
    if ($conn->query($query)) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="POST" action="">
        <h2>Daftar</h2>
        <input type="text" name="username" placeholder="Nama Pengguna" required>
        <input type="password" name="password" placeholder="Kata Sandi" required>
        <button type="submit" name="register">Daftar</button>
    </form>
</body>
</html>
