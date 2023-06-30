<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <title>Tambah data</title>
</head>
<body>
    <div class="container col-md-6 mt-4">
        <h1>TAMBAH DATA</h1>
        <div class="card">
            <div class="card-header bg-success text-white">
                TAMBAH DATA ANGGOTA
            </div>
            <div class="card-body">
                
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label>NO REKENING</label>
                        <input type="text" class="form-control" name="no_rek"  require>
                    </div>
                    <div class="form-group">
                        <label>NAMA PELANGGAN</label>
                        <input type="text" class="form-control" name="nama" require>
                    </div>
                    <div class="form-group">
                        <label>DAYA (V)</label>
                        <input type="number" class="form-control" name="daya" require>
                    </div>
                    <div class="form-group">
                        <label>METERAN BULAN LALU</label>
                        <input type="number" class="form-control" name="bulan_lalu" require>
                    </div>
                    <div class="form-group">
                        <label>METERAN BULAN INI</label>
                        <input type="number" class="form-control" name="bulan_ini" require>
                    </div>
                    <div class="form-group">
                        <label>TANGGAL BAYAR</label>
                        <input type="date" class="form-control" name="tanggal_bayar" require>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">
                        Simpan Data
                    </button>
                </form>

                <?php
                    include "koneksi.php";
                    if (isset($_POST["submit"])) {
                        $no_rek = $_POST['no_rek'];
                        $nama = $_POST['nama'];
                        $daya = intval($_POST['daya']);
                        $bulan_lalu = intval($_POST['bulan_lalu']);
                        $bulan_ini = intval($_POST['bulan_ini']);
                        $tanggal_bayar = $_POST['tanggal_bayar'];
                        // count number
                        $num = mysqli_query($koneksi, "SELECT COUNT(*) AS id FROM listrik;");
                        $row = mysqli_fetch_assoc($num);
                        $total = intval($row['id']);
                        $id = $total + 1;
                        
                        mysqli_query($koneksi, "INSERT INTO listrik(id, no_rek, nama, daya, bulan_lalu, bulan_ini, tanggal_bayar) VALUES ('$id','$no_rek','$nama','$daya','$bulan_lalu','$bulan_ini','$tanggal_bayar')") or die (mysqli_error($koneksi));
                        echo "<script> alert('Data berhasil di simpan!!');window.location='index.php'; </script>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>