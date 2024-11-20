<?php
session_start();

$users = [
    'admin' => password_hash('admin123', PASSWORD_DEFAULT),
    'Admin' => password_hash('pass@admiN1', PASSWORD_DEFAULT),
    'Anita' => password_hash('pass@anitA2', PASSWORD_DEFAULT),
    'Sapta' => password_hash('pass@saptA3', PASSWORD_DEFAULT),
    'xxx*' => password_hash('yyy*', PASSWORD_DEFAULT),
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Validasi input kosong
    if (empty($username) || empty($password)) {
        echo "<script>alert('Username dan Password belum diisi');</script>";
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
        exit;
    }

    // Cek apakah username ada di array
    if (isset($users[$username])) {
        // Verifikasi password
        if (password_verify($password, $users[$username])) {
            // Login berhasil
            $_SESSION['login'] = 1;
            $_SESSION['username'] = $username;
            header('Location: index.php');
            exit;
        } else {
            // Password salah
            echo "<script>alert('Password yang dimasukkan salah');</script>";
            echo "<meta http-equiv='refresh' content='0;url=login.php'>";
            exit;
        }
    } else {
        // Username tidak ditemukan
        echo "<script>alert('Username tidak terdaftar');</script>";
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
        exit;
    }
} else {
    // Jika bukan metode POST, arahkan kembali ke halaman login
    header('Location: login.php');
    exit;
}
// $username = $_POST['username'];
// $password = md5($_POST['password']);
// if (($_POST['username'] == "") && ($_POST['password'] == "")) {
//     echo "<script>alert('Username dan Password belum diisi')</script>";
//     echo "<meta http-equiv='refresh' content='1;url=login.php'>";
// } else {
//     //user = "admin" & password = "admin123"
//     if (isset($users[$username]) && $users[$username] === $password) {
//         $_SESSION['login'] = 1;
//         $_SESSION['username'] = $_POST['username'];
//     }
//     if ((isset($_SESSION['login'])) && ($_SESSION['login'] == 1)) {
//         header('location:index.php');
//     } else {
//         echo "<script>alert('Login Gagal, Silahkan Coba Lagi')</script>";
//         echo "<meta http-equiv='refresh' content='1;url=login.php'>";
//     }
// }
?>