<?php 
include ("koneksi.php");

if (isset($_POST["simpan"])) {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $tempat_tanggal_lahir = $_POST["tempat_tanggal_lahir"];
    $fakultas = $_POST["fakultas"];
    $prodi = $_POST["prodi"];
    $alamat = $_POST["alamat"];
    $email = $_POST["email"];

    // Query untuk menambah data mahasiswa baru
    $query = "INSERT INTO datamahasiswa (nim, nama, tempat_tanggal_lahir, fakultas, prodi, alamat, email) VALUES ('$nim', '$nama', '$tempat_tanggal_lahir', '$fakultas', '$prodi', '$alamat', '$email')";
    
    $result = mysqli_query($link, $query);

    if ($result) {
        header('location: index.php?page=data&pesan=1');
    }
}
?>

