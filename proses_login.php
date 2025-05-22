<?php
session_start();
include 'functions.php';

$users = loadData('data/users.json');

$username = $_POST['username'];
$password = $_POST['password'];

$found = false;
foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
        $found = true;
        break;
    }
}

if ($found) {
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
} else {
    echo "Login gagal! <a href='index.php'>Coba lagi</a>";
}
?>
