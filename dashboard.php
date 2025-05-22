<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
include 'functions.php';

$data = loadData('data/mahasiswa.json');
$cari = isset($_GET['cari']) ? strtolower($_GET['cari']) : '';

if ($cari) {
    $data = array_filter($data, function ($mhs) use ($cari) {
        return strpos(strtolower($mhs['nama']), $cari) !== false || strpos($mhs['nim'], $cari) !== false;
    });
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f1f2f6;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
            color: #2c3e50;
        }
        .actions {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .actions a, input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            transition: background-color 0.3s;
        }
        .actions a:hover, input[type="submit"]:hover {
            background-color: #2980b9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 12px 10px;
            text-align: left;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        table th {
            background-color: #2c3e50;
            color: white;
        }
        .search-form {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
        .search-form input[type="text"] {
            padding: 8px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .action-links a {
            margin-right: 10px;
            color: #3498db;
            text-decoration: none;
        }
        .action-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>📋 Dashboard - Data Mahasiswa</h2>

    <div class="actions">
        <a href="tambah.php">+ Tambah Data</a>
        <form class="search-form" method="GET" action="">
            <input type="text" name="cari" placeholder="Cari nama/NIM..." value="<?= htmlspecialchars($cari) ?>">
            <input type="submit" value="Cari">
        </form>
        <a href="logout.php">🔒 Logout</a>
    </div>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; foreach ($data as $key => $mhs): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($mhs['nama']) ?></td>
                <td><?= htmlspecialchars($mhs['nim']) ?></td>
                <td><?= htmlspecialchars($mhs['jurusan']) ?></td>
                <td class="action-links">
                    <a href="edit.php?id=<?= $key ?>">Edit</a>
                    <a href="hapus.php?id=<?= $key ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
