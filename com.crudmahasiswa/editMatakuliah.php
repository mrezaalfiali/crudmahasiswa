<?php
include("koneksi.php");

if (isset($_GET['id_matakuliah'])) {
    $id_matakuliah = $_GET['id_matakuliah'];
    $query = "SELECT * FROM matakuliah WHERE id_matakuliah = '$id_matakuliah'";
    $result = mysqli_query($link, $query);
    $data = mysqli_fetch_assoc($result);
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Mata Kuliah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1 class="text-center">Edit Mata Kuliah</h1>
    <form action="prosesEditMatakuliah.php" method="POST">
      <input type="hidden" name="id_matakuliah" value="<?php echo $data['id_matakuliah']; ?>">
      <div class="mb-3">
        <label for="kode_matakuliah" class="form-label">Kode Mata Kuliah</label>
        <input type="text" name="kode_matakuliah" class="form-control" id="kode_matakuliah" value="<?php echo $data['kode_matakuliah']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="nama_matakuliah" class="form-label">Nama Mata Kuliah</label>
        <input type="text" name="nama_matakuliah" class="form-control" id="nama_matakuliah" value="<?php echo $data['nama_matakuliah']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="sks" class="form-label">SKS</label>
        <input type="number" name="sks" class="form-control" id="sks" value="<?php echo $data['sks']; ?>" required>
      </div>
      <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>
      <a class="btn btn-warning" href="index.php?page=matakuliah" role="button">Cancel</a>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
