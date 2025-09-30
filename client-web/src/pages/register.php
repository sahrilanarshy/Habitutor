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
            <form>
                <div class="input-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" required>
                </div>
                <div class="input-group">
                    <label for="register-email">Email</label>
                    <input type="email" id="register-email" required>
                </div>
                <div class="input-group">
                    <label for="telepon">Telepon</label>
                    <input type="tel" id="telepon" required>
                </div>
                <div class="input-group">
                    <label for="register-password">Password</label>
                    <input type="password" id="register-password" required>
                </div>
                <button type="submit" class="btn">Daftar</button>
                <p class="bottom-text">Sudah punya akun? <a href="login.php">Masuk Sekarang</a></p>
            </form>
        </div>
    </div>
</body>
</html>