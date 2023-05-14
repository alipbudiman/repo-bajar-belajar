<?php
$con = mysqli_connect("localhost","root","");
$pilih = mysqli_select_db($con, "pakmuh");
if ($pilih) {
    include "fetch_data.php";
} else {
    echo "Koneksi gagal";
}
?>