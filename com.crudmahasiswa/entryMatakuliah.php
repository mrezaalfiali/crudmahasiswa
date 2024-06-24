<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Mata Kuliah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1 class="text-center">Tambah Mata Kuliah</h1>
    <form action="prosesSimpanMatakuliah.php" method="POST">
      <div class="mb-3">
        <label for="kode_matakuliah" class="form-label">Kode Mata Kuliah</label>
        <input type="text" name="kode_matakuliah" class="form-control" id="kode_matakuliah" required>
      </div>
      <div class="mb-3">
        <label for="nama_matakuliah" class="form-label">Nama Mata Kuliah</label>
        <input type="text" name="nama_matakuliah" class="form-control" id="nama_matakuliah" required>
      </div>
      <div class="mb-3">
        <label for="sks" class="form-label">SKS</label>
        <input type="number" name="sks" class="form-control" id="sks" required>
      </div>
      <button type="submit" name="simpan" value="simpan" class="btn btn-primary">Save</button>
      <a class="btn btn-warning" href="index.php?page=matakuliah" role="button">Cancel</a>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
