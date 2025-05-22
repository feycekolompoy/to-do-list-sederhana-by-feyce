<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

include 'functions.php';

$id = $_POST['id'];
$mahasiswa = loadData('data/mahasiswa.json');

if (!isset($mahasiswa[$id])) {
    echo "Data tidak ditemukan.";
    exit;
}

$mahasiswa[$id] = [
    "nama" => $_POST['nama'],
    "nim" => $_POST['nim'],
    "jurusan" => $_POST['jurusan']
];

saveData('data/mahasiswa.json', $mahasiswa);
header("Location: dashboard.php");
?>
