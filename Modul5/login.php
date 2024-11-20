<?php
session_start();
$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']); // Hapus pesan error setelah ditampilkan
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Aplikasi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="head-login">
        Dashboard
    </header>
    <div class="container">
        <section class="login-box">
            <h2>Login Aplikasi</h2>
            <form method="post" action="ceklogin.php">
                <input type="text" placeholder="username" name="username"
                    id="username">
                <input type="password" placeholder="password" name="password"
                    id="password">
                <input type="submit" value="Login">
            </form>
        </section>
    </div>
    <footer class="footer-login">
        Copyright &copy; 2024
    </footer>
</body>

</html>