<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #89f7fe, #66a6ff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            width: 300px;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        .register-link {
            margin-top: 15px;
            text-align: center;
        }
        .register-link a {
            color: #333;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="card">
    <h2>Login</h2>
    <form method="POST" action="proses_login.php">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
    <div class="register-link">
        Belum punya akun? <a href="register.php">Daftar di sini</a>
    </div>
</div>
</body>
</html>
