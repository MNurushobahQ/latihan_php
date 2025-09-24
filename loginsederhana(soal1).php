<?php
// contoh sederhana (tidak untuk produksi)
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// akun contoh
$akun_user = "andi";
$akun_pass = "rahasia";

if ($username == $akun_user && $password == $akun_pass) {
    echo "Login berhasil. Selamat datang, " . htmlspecialchars($username) . "!";
    // header("Location: dashboard.php"); exit;
} else {
    echo "Login gagal. Username atau password salah.";
}
?>
<!-- Form sederhana untuk mengetes -->
<form method="post">
  Username: <input name="username" /><br>
  Password: <input name="password" type="password"/><br>
  <button type="submit">Login</button>
</form>
