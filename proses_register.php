<?php
include 'functions.php';

$username = $_POST['username'];
$password = $_POST['password'];

$users = loadData('data/users.json');

// Cek apakah username sudah ada
foreach ($users as $user) {
    if ($user['username'] === $username) {
        echo "Username sudah digunakan. <a href='register.php'>Kembali</a>";
        exit;
    }
}

// Tambah user baru
$users[] = [
    "username" => $username,
    "password" => $password
];

saveData('data/users.json', $users);
echo "Registrasi berhasil. <a href='index.php'>Login sekarang</a>";
?>
