<?php
// Include file koneksi ke database
include_once "koneksi.php";

// Inisialisasi variabel error untuk menampung pesan error
$error = '';

// Proses pendaftaran ketika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan melalui form
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    // Lakukan validasi input
    if (empty($username) || empty($email) || empty($password)) {
        $error = "Semua bidang harus diisi.";
    } else {
        // Cek apakah username sudah terdaftar
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) > 0) {
            $error = "Username sudah terdaftar. Silakan gunakan username lain.";
        } else {
            // Simpan data pengguna ke dalam database tanpa melakukan hashing password
            $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            if (mysqli_query($link, $query)) {
                // Redirect ke halaman login setelah pendaftaran berhasil
                header("Location: login.php");
                exit();
            } else {
                $error = "Terjadi kesalahan saat mendaftarkan pengguna. Silakan coba lagi.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 400px;
            margin: 100px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Register</h2>
        <form method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <?php if (!empty($error)) { ?>
            <div class="alert alert-danger mt-3" role="alert"><?php echo $error; ?></div>
        <?php } ?>
        <p class="mt-3">Already have an account? <a href="login.php">Login here</a>.</p>
    </div>
</body>
</html>
