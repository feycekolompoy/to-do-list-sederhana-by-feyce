<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #f6d365, #fda085);
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
            background-color: #e67e22;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #d35400;
        }
        .login-link {
            margin-top: 15px;
            text-align: center;
        }
        .login-link a {
            color: #333;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="card">
    <h2>Register</h2>
    <form method="POST" action="proses_register.php">
        <input type="text" name="username" placeholder="Username baru" required>
        <input type="password" name="password" placeholder="Password baru" required>
        <input type="submit" value="Daftar">
    </form>
    <div class="login-link">
        Sudah punya akun? <a href="index.php">Login di sini</a>
    </div>
</div>
</body>
</html>
