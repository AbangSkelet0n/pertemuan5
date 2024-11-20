<?php
session_start();
ob_start();
// Mengecek session
if (empty($_SESSION['username'])) {
    echo "<script>alert('Anda harus login terlebih dahulu')</script>";
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
} else {
    $username = $_SESSION['username'];
?>
    <!DOCTYPE HTML>
    <html>

    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header class="head-index">
            Dashboard
            <p>Anda login sebagai <b><?php echo $username; ?></b></p>
        </header>
        <div class="container index">
            <aside>
                <ul class="menu">
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="tabel-makanan.php">Makanan Khas</a></li>
                    <li><a href="logout.php">Keluar</a></li>
                </ul>
            </aside>
            <section class="main">
                <center>
                    <h3>Selamat Datang</h3>
                </center>
            </section>
        </div>
        <footer>
            Copyright &copy; 2024
        </footer>
    </body>

    </html>
<?php
}
?>