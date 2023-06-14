<?php
include "koneksi.php";
$id = $_GET['id'];
$datas = mysqli_query($koneksi, "DELETE FROM laporan_pinjaman WHERE id='$id'") or die(mysqli_error($koneksi));
echo "<script>alert('Data berhasil di hapus.');window.location='index.php';</script>";
?>