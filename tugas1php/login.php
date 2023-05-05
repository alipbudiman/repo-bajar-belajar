<?php
$namauser = "Alif Budiman Wahbbi";
$email = "alif@gmail.com";
if(empty($_POST['username']) || empty($_POST['password'])) {
    header("Location:empty.php");
} else {
    if (($_POST['username'] === "alifbudiman") && ($_POST['password'] === "123alif")) {
        echo "Selamat datang ".$namauser."<br>";
        echo "Email: ".$email."<br>";
        date_default_timezone_set("Asia/Jakarta");
        echo "Waktu login: ".date("F-m-Y, g:i:s a")."<br>";
    }
}
?>