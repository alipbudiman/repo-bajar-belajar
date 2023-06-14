<?php
include "../koneksi.php";
$id = $_GET['id'];
$datas = mysqli_query($koneksi, "DELETE FROM daftar_anggota WHERE id='$id'") or die(mysqli_error($koneksi));
echo "<script>alert('Data berhasil di hapus.');window.location='daftar_anggota.php';</script>";
?>