<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

include 'functions.php';

$mahasiswa = loadData('data/mahasiswa.json');

$baru = [
    "nama" => $_POST['nama'],
    "nim" => $_POST['nim'],
    "jurusan" => $_POST['jurusan']
];

$mahasiswa[] = $baru;
saveData('data/mahasiswa.json', $mahasiswa);

header("Location: dashboard.php");
?>
