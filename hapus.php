<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

include 'functions.php';

$id = $_GET['id'];
$mahasiswa = loadData('data/mahasiswa.json');

if (isset($mahasiswa[$id])) {
    unset($mahasiswa[$id]);
    $mahasiswa = array_values($mahasiswa); // Reset index agar rapi
    saveData('data/mahasiswa.json', $mahasiswa);
}

header("Location: dashboard.php");
?>
