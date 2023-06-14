<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <script type="module" src="sub/assets/script/tambah.js"></script>
    <script type="module" src="sub/assets/script/script.js"></script>
    <title>Tambah data</title>
</head>
<body>
    <div class="container col-md-6 mt-4">
        <h1>TAMBAH DATA</h1>
        <div class="card">
            <div class="card-header bg-success text-white">
                TAMBAH DATA
            </div>
            <div class="card-body">
                <?php
                include "koneksi.php";
                // count number
                $num = mysqli_query($koneksi, "SELECT COUNT(*) AS id FROM laporan_pinjaman;");
                $row = mysqli_fetch_assoc($num);
                $total = intval($row['id']);
                $id = $total + 1;
                ?>
                <form action="" method="post" role="form" id="myForm">
                    <!-- ============NO BUKTI============== -->
                    <div class="form-group">
                        <label>NO BUKTI</label>
                        <input type="text" class="form-control" value=<?php echo("P00".$id)?> name="no_bukti" readonly>
                    </div>
                    <!-- ============TANGGAL PINJAM============== -->
                    <div class="form-group">
                        <label>TANGGAL PINJAM</label>
                        <input type="date" class="form-control" name="tanggal_pinjam" require>
                    </div>
                    <!-- ============ID ANGGOTA============== -->
                    <div class="form-group">
                        <label>ID ANGGOTA</label>
                        <input type="text" class="form-control" name="id_agt" id="id_agt" require>
                    </div>
                    <!-- ============NAMA============== -->
                    <div class="form-group">
                        <label>NAMA</label>
                        <input type="text" class="form-control" name="nama" require>
                    </div>
                    <!-- ============JUMLAH PINJAMAN============== -->
                    <div class="form-group">
                        <label>JUMLAH PINJAMAN</label>
                        <input type="number" class="form-control" name="jumlah_pinjaman" require>
                    </div>
                    <!-- ============LAMA PINJAMAN============== -->
                    <div class="form-group">
                        <label>LAMA PINJAMAN (Bulan)</label>
                        <input type="number" class="form-control" name="lama_pinjaman" require>
                    </div>
                    <!-- ============BUNGA============== -->
                    <div class="form-group">
                        <label>BUNGA / TAHUN (%)</label>
                        <input type="number" class="form-control" name="bunga" require>
                    </div>

                    <label class="form-group">RINCIAN</label>
                    
                    <div class="here-result">
                        
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">
                        Simpan Data
                    </button>
                </form>

                <?php
                    include "koneksi.php";
                    if (isset($_POST["submit"])) {
                        $no_bukti = $_POST['no_bukti'];
                        $tanggal_pinjam = $_POST['tanggal_pinjam'];
                        $id_agt = $_POST['id_agt'];
                        $nama = $_POST['nama'];
                        $jumlah_pinjaman = $_POST['jumlah_pinjaman'];
                        $lama_pinjaman = $_POST['lama_pinjaman'];
                        $bunga = $_POST['bunga'];
                        $result = mysqli_query($koneksi, "SELECT * FROM daftar_anggota WHERE id_agt = '$id_agt'");
                        if ($result->num_rows > 0) {
                            $status_row = $result->fetch_assoc();
                            $status = $status_row["status"];
                            if ($status == "active") {
                                mysqli_query($koneksi, "INSERT INTO laporan_pinjaman(id, no_bukti, tanggal_pinjam, id_agt, nama, jumlah_pinjaman, lama_pinjaman, bunga) VALUES ('$id','$no_bukti','$tanggal_pinjam','$id_agt','$nama','$jumlah_pinjaman','$lama_pinjaman','$bunga')") or die (mysqli_error($koneksi));
                                echo "<script> alert('Data berhasil di simpan!!');window.location='index.php'; </script>";
                            } else {
                                $nama_anggota = $status_row["nama"];
                                echo "<script> alert('Anggota ".$nama_anggota." Adalah anggota tidak aktif, tidak dapat membuat pinjaman !!')</script>";
                            }
                        } else {
                            echo "<script> alert('ID ".$id_agt." Tidak ditemukan di daftar anggota, tolong periksa form id kembali !!')</script>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>