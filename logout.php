<?php
session_start();            // Mulai sesi
session_destroy();          // Hapus semua data sesi
header("Location: index.php"); // Arahkan kembali ke halaman login
exit;
?>
