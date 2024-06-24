<?php
include("koneksi.php");

if (isset($_GET['id_matakuliah'])) {
    $id_matakuliah = $_GET['id_matakuliah'];

    $query = "DELETE FROM matakuliah WHERE id_matakuliah = '$id_matakuliah'";

    $result = mysqli_query($link, $query);

    if ($result) {
        header('Location: index.php?page=matakuliah&pesan=3');
    }
}
?>
