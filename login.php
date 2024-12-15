<?php
// Misalnya, data login hardcoded untuk tujuan contoh
$valid_username = "admin";
$valid_password = "password123";

// Mengambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Validasi login
if ($username == $valid_username && $password == $valid_password) {
    echo "Login berhasil!";
    // Redirect ke halaman lain (misalnya dashboard)
    header("Location: dashboard.php");
    exit;
} else {
    echo "Username atau password salah!";
    // Redirect kembali ke halaman login
    header("Location: login.html");
    exit;
}
?>