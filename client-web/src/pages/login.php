<?php
// Mulai session jika belum
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include koneksi database
require_once '../../../server/config/koneksi.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($email && $password) {
        $stmt = mysqli_prepare($koneksi, 'SELECT id, nama, email, password FROM users WHERE email = ?');
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            mysqli_stmt_bind_result($stmt, $id, $nama, $email_db, $password_hash);
            mysqli_stmt_fetch($stmt);
            if (password_verify($password, $password_hash)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['nama'] = $nama;
                $_SESSION['email'] = $email_db;
                header('Location: user_dashboard/index.php');
                exit;
            } else {
                $error = 'Password salah.';
            }
        } else {
            $error = 'Email tidak ditemukan.';
        }
        mysqli_stmt_close($stmt);
    } else {
        $error = 'Email dan password wajib diisi.';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Habitutor</title>
    <link rel="stylesheet" href="../../src/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="form-container">
        <div class="form-box">
            <img src="../assets/img/logo habitutor.png" alt="Habitutor Logo" width="100" height="100">
            <div class="logo">
                <span class="logo-text">Login - Habitutor</span>
            </div>
            <h2>Selamat Datang di Habitutor</h2>
            <p class="subtitle">Belum punya akun? <a href="register.php">Daftar Sekarang</a></p>
            <?php if ($error): ?>
                <div class="error-message" style="color:red; margin-bottom:10px;"> <?= htmlspecialchars($error) ?> </div>
            <?php endif; ?>
            <form method="post" autocomplete="off">
                <div class="input-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" name="password" required>
                </div>
                <button type="submit" class="btn">Masuk</button>
                <a href="forgot-password.php" class="form-link">Lupa Password?</a>
            </form>
        </div>
    </div>
</body>
</html>