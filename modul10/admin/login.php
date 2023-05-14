<?php
include "koneksi.inc.php";
mysqli_select_db($conn,"pakmuh");

$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM formlogin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    // Set session username
    $_SESSION['username'] = $username;
    header('Location: http://localhost/modul10/kontak.php');
    exit;
} else {
    // Jika tidak, tampilkan pesan kesalahan
    $error = "Username atau password salah";
    echo $error;
}
?>