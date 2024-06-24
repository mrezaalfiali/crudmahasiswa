<?php
include("koneksi.php");

if (isset($_POST["update"])) {
    $id_mahasiswa = $_POST["id_mahasiswa"];
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $tempat_tanggal_lahir = $_POST["tempat_tanggal_lahir"];
    $fakultas = $_POST["fakultas"];
    $prodi = $_POST["prodi"];
    $alamat = $_POST["alamat"];
    $email = $_POST["email"];

    $query = "UPDATE datamahasiswa SET nim='$nim', nama='$nama', tempat_tanggal_lahir='$tempat_tanggal_lahir', fakultas='$fakultas', prodi='$prodi', alamat='$alamat', email='$email' WHERE id_mahasiswa='$id_mahasiswa'";
    $result = mysqli_query($link, $query);

    if ($result) {
        header('Location: index.php?page=data&pesan=2');
    } else {
        echo "Error updating record: " . mysqli_error($link);
    }
}
?>
