<?php
    $host="localhost";
    $username="root";
    $password="";
    $conn = mysqli_connect($host, $username, $password) or die ("Koneksi gagal dibangun");
    mysqli_select_db($conn, "pakmuh") or die ("Database tidak dapat dibuka");
    $num = mysqli_query($conn, "SELECT COUNT(*) AS total FROM mydata;");
    $row = mysqli_fetch_assoc($num);
    $total = intval($row['total']);

    $genid=$total + 1;
    $vnama=$_POST['nama'];
    $vjk=$_POST['jk'];
    $vemail=$_POST['email'];
    $valamat=$_POST['alamat'];
    $vkota=$_POST['kota'];
    $vpesan=$_POST['pesan'];

    $sql="insert into mydata value (\"".$genid."\", \"".$vnama."\", \"".$vjk."\", \"".$vemail."\", \"".$valamat."\", \"".$vkota."\", \"".$vpesan."\")";
    mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
    mysqli_close($conn);
    header("location:kontak.php");
?>