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
            <form>
                <div class="input-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" required>
                </div>
                <div class="input-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" required>
                </div>
                <button type="submit" class="btn">Masuk</button>
                <a href="forgot-password.php" class="form-link">Lupa Password?</a>
            </form>
        </div>
    </div>
</body>
</html>