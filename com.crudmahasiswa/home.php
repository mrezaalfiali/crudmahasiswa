<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: url('1234.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            overflow: hidden;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
        }
        .jumbotron {
    background: rgba(0, 0, 0, 0.3); /* Ubah nilai opacity menjadi lebih rendah */
    color: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5); /* Tambahkan bayangan teks */
        }

        .jumbotron h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .jumbotron p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        
        .btn-primary {
            background-color: #00b3e6;
            border-color: #00b3e6;
            font-size: 1.2rem;
            padding: 15px 40px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #008bb3;
            border-color: #008bb3;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Selamat Datang di Sistem Informasi Mahasiswa</h1>
            <p>Temukan informasi mahasiswa terkini dan kelola data mereka dengan mudah.</p>
            <a href="index.php?page=data" class="btn btn-primary">Lihat Data Mahasiswa</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
