<?php
include("koneksi.php");

if (isset($_GET['id_mahasiswa'])) {
    $id_mahasiswa = $_GET['id_mahasiswa'];

    // Fetch the current data
    $query = "SELECT * FROM datamahasiswa WHERE id_mahasiswa = $id_mahasiswa";
    $result = mysqli_query($link, $query);
    $data = mysqli_fetch_assoc($result);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center">Edit Mahasiswa</h1>
    
    <form action="prosesEdit.php" method="POST">
        <input type="hidden" name="id_mahasiswa" value="<?php echo $data['id_mahasiswa']; ?>">
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="number" name="nim" class="form-control" id="nim" value="<?php echo $data['nim']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $data['nama']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="tempat_tanggal_lahir" class="form-label">Tempat Tanggal Lahir</label>
            <input type="text" name="tempat_tanggal_lahir" class="form-control" id="tempat_tanggal_lahir" value="<?php echo $data['tempat_tanggal_lahir']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <input type="text" name="fakultas" class="form-control" id="fakultas" value="<?php echo $data['fakultas']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
            <input type="text" name="prodi" class="form-control" id="prodi" value="<?php echo $data['prodi']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $data['alamat']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="<?php echo $data['email']; ?>" required>
        </div>
        <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>
        <a class="btn btn-warning" href="index.php" role="button">Cancel</a>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
