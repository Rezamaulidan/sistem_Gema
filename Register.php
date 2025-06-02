<?php
// register.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akun</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light"></body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="min-width:350px; max-width:400px; width:100%;">
            <h2 class="mb-4 text-center">Form Pendaftaran Akun</h2>
            <?php
            // Menampilkan pesan jika ada error atau sukses dari proses_register.php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<div class='alert alert-danger'>Registrasi gagal! Username sudah digunakan.</div>";
                } elseif ($_GET['pesan'] == "sukses") {
                    echo "<div class='alert alert-success'>Registrasi berhasil! Silakan login.</div>";
                }
            }
            ?>
            <form action="proses_register.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Username:</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Daftar</button>
            </form>
            <p class="mt-3 text-center">
                Sudah punya akun? <a href="login.php">Login di sini</a>
            </p>
        </div>
    </div>
    <!-- Bootstrap JS CDN (optional, for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>