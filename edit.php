<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

include 'functions.php';
$id = $_GET['id'];
$mahasiswa = loadData('data/mahasiswa.json');

if (!isset($mahasiswa[$id])) {
    echo "Data tidak ditemukan.";
    exit;
}

$data = $mahasiswa[$id];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f1f2f6;
            margin: 0;
            padding: 20px;
        }
        .card {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 50px auto;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        h2 {
            text-align: center;
            color: #2c3e50;
        }
        input[type="text"], input[type="password"], input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        .back-link {
            text-align: center;
            margin-top: 20px;
        }
        .back-link a {
            color: #3498db;
            text-decoration: none;
        }
        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Edit Data Mahasiswa</h2>
    <form method="POST" action="proses_edit.php">
        <input type="hidden" name="id" value="<?= $id ?>">
        Nama: <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required>
        NIM: <input type="text" name="nim" value="<?= htmlspecialchars($data['nim']) ?>" required>
        Jurusan: <input type="text" name="jurusan" value="<?= htmlspecialchars($data['jurusan']) ?>" required>
        <input type="submit" value="Update">
    </form>
    <div class="back-link">
        <a href="dashboard.php">Kembali ke Dashboard</a>
    </div>
</div>

</body>
</html>
