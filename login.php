<?php
require 'config.php';
session_start();

if (isset($_POST['login'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    $query = "SELECT * FROM users_p WHERE username = '$username' AND password = MD5('$password')";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="POST" action="">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Nama Pengguna" required>
        <input type="password" name="password" placeholder="Kata Sandi" required>
        <button type="submit" name="login">Masuk</button>
    </form>
</body>
</html>
