<?php 
include ("koneksi.php");

if (isset($_POST["simpan"])) {
    $kode_matakuliah = $_POST["kode_matakuliah"];
    $nama_matakuliah = $_POST["nama_matakuliah"];
    $sks = $_POST["sks"];

    $query = "INSERT INTO matakuliah (kode_matakuliah, nama_matakuliah, sks) VALUES ('$kode_matakuliah', '$nama_matakuliah', '$sks')";

    $result = mysqli_query($link, $query);

    if ($result) {
        header('Location: index.php?page=matakuliah&pesan=1');
    }
}
?>
