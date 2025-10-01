<?php
// Mulai session jika belum
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include koneksi database
require_once '../../../server/config/koneksi.php';

$error = '';
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $no_telpon = isset($_POST['no_telpon']) ? trim($_POST['no_telpon']) : '';
    // Validasi server-side: hanya angka
    if ($no_telpon && !preg_match('/^[0-9]+$/', $no_telpon)) {
        $error = 'Nomor telepon hanya boleh angka.';
    }
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($nama && $email && $no_telpon && $password && !$error) {
        // Cek email/no_telpon sudah terdaftar
        $stmt = mysqli_prepare($koneksi, 'SELECT id FROM users WHERE email = ? OR no_telpon = ?');
        mysqli_stmt_bind_param($stmt, 'ss', $email, $no_telpon);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            $error = 'Email atau No. Telepon sudah terdaftar.';
        } else {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt_insert = mysqli_prepare($koneksi, 'INSERT INTO users (nama, email, no_telpon, password) VALUES (?, ?, ?, ?)');
            mysqli_stmt_bind_param($stmt_insert, 'ssss', $nama, $email, $no_telpon, $password_hash);
            if (mysqli_stmt_execute($stmt_insert)) {
                $success = 'Registrasi berhasil! Silakan login.';
            } else {
                $error = 'Registrasi gagal. Silakan coba lagi.';
            }
            mysqli_stmt_close($stmt_insert);
        }
        mysqli_stmt_close($stmt);
    } else {
        $error = 'Semua field wajib diisi.';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Habitutor</title>
    <link rel="stylesheet" href="../../src/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="form-container">
        <div class="form-box">
             <img src="../assets/img/logo habitutor.png" alt="Habitutor Logo" width="100" height="100">
             <div class="logo">
                <span class="logo-text">Habitutor</span>
            </div>
            <h2>Langkah Awal Menuju PTN Impian</h2>
            <p class="subtitle">Dimulai dari Sekarang</p>
            <?php if ($error): ?>
                <div class="error-message" style="color:red; margin-bottom:10px;"> <?= htmlspecialchars($error) ?> </div>
            <?php endif; ?>
            <?php if ($success): ?>
                <div class="success-message" style="color:green; margin-bottom:10px;"> <?= htmlspecialchars($success) ?> </div>
            <?php endif; ?>
            <form method="post" autocomplete="off">
                <div class="input-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="input-group">
                    <label for="register-email">Email</label>
                    <input type="email" id="register-email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="telepon">Telepon</label>
                    <input type="tel" id="telepon" name="no_telpon" required pattern="[0-9]+" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                    <small id="tel-warning" style="color:red;display:none;">Nomor telepon hanya boleh angka.</small>
                </div>
                <div class="input-group">
                    <label for="register-password">Password</label>
                    <input type="password" id="register-password" name="password" required>
                </div>
                <button type="submit" class="btn">Daftar</button>
                <p class="bottom-text">Sudah punya akun? <a href="login.php">Masuk Sekarang</a></p>
            </form>
        </div>
    </div>
</body>
<script>
// Client-side: tampilkan warning jika ada abjad
document.addEventListener('DOMContentLoaded', function() {
    var telInput = document.getElementById('telepon');
    var warning = document.getElementById('tel-warning');
    telInput.addEventListener('input', function() {
        if (/[^0-9]/.test(telInput.value)) {
            warning.style.display = 'block';
        } else {
            warning.style.display = 'none';
        }
    });
});
</script>
</html>