<?php
// Mulai sesi
session_start();

// Include file koneksi ke database
include_once "koneksi.php";

// Inisialisasi variabel error untuk menampung pesan error
$error = '';

// Proses login ketika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan melalui form
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    // Lakukan validasi input
    if (empty($username) || empty($password)) {
        $error = "Username dan password harus diisi.";
    } else {
        // Cari pengguna berdasarkan username
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            // Verifikasi password tanpa hashing
            if ($password == $row['password']) {
                // Masukkan username ke dalam sesi
                $_SESSION['username'] = $username;
                // Redirect ke halaman utama setelah login berhasil
                header("Location: index.php");
                exit();
            } else {
                $error = "Password salah.";
            }
        } else {
            $error = "Username tidak ditemukan.";
        }
    }
}

// Jika terjadi kesalahan, kembali ke halaman login dan tampilkan pesan error
$_SESSION['error'] = $error;
header("Location: login.php");
exit();
?>
