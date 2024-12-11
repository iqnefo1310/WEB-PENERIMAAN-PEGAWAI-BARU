<?php
// Cek jika form login disubmit
if (isset($_POST['login'])) {
    // Ambil data username dan password dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username dan password sesuai
    if ($username == 'admin' && $password == 'admin123') {
        echo "<p>Login berhasil!</p>";
        // Redirect atau tampilkan halaman yang aman setelah login
        // header('Location: dashboard.php'); // Contoh untuk redirect ke halaman dashboard
        header("Location: admin.php");
    } else {
        echo "<p style='color: red;'>Username atau password salah!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginAdmin.css">
    <title>Login</title>
</head>

<body>
    <form method="POST" action="">
        <h2>Login Admin</h2>
        <input type="text" name="username" placeholder="Nama Admin" required>
        <input type="password" name="password" placeholder="Kata Sandi" required>
        <button type="submit" name="login">Masuk</button>
    </form>
</body>

</html>
