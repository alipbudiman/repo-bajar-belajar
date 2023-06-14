<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <script type="module" src="sub/assets/script/script.js"></script>
    <title>EDIT DATA</title>
</head>
<body>
    <div class="container col-md-6 mt-4">
        <h1>EDIT DATA</h1>
        <div class="card">
            <div class="card-header bg-success text-white">
            <h1>EDIT DATA</h1>
            </div>
            <div class="card-body">
                <?php
                    include "koneksi.php";
                    $id=$_GET['id'];
                    $data=mysqli_query($koneksi, "SELECT * FROM laporan_pinjaman WHERE id='$id'");
                    $row=mysqli_fetch_assoc($data);

                ?>
            </div>
            <form action="" method="post" role="form" id="myForm">
                <div class="form-group">
                    <label>NO BUKTI</label>
                    <input type="text" class="form-control" name="no_bukti" value="<?=$row['no_bukti'];?>" readonly>
                </div>
                <div class="form-group">
                    <label>TANGGAL PINJAM</label>
                    <input type="date" class="form-control" name="tanggal_pinjam" value="<?=$row['tanggal_pinjam'];?>" require>
                </div>
                <div class="form-group">
                    <label>ID ANGGOTA</label>
                    <input type="text" class="form-control" name="id_agt" value="<?=$row['id_agt'];?>" require>
                </div>
                <div class="form-group">
                    <label>NAMA</label>
                    <input type="text" class="form-control" name="nama" value="<?=$row['nama'];?>" require>
                </div>
                <div class="form-group">
                    <label>JUMLAH PINJAMAN</label>
                    <input type="number" class="form-control" name="jumlah_pinjaman" value="<?=$row['jumlah_pinjaman'];?>" require>
                </div>
                <div class="form-group">
                    <label>LAMA PINJAMAN</label>
                    <input type="number" class="form-control" name="lama_pinjaman" value="<?=$row['lama_pinjaman'];?>" require>
                </div>
                <div class="form-group">
                    <label>BUNGA</label>
                    <input type="number" class="form-control" name="bunga" value="<?=$row['bunga'];?>" require>
                </div>

                <label class="form-group">RINCIAN</label>
                    
                <div class="here-result">
                    
                </div>
                
                <button type="submit" class="btn btn-primary" name="submit" value="simpan">
                    Update Data
                </button>
            </form>
            <?php
                if(isset($_POST['submit'])) {
                    $no_bukti = $_POST['no_bukti'];
                    $tanggal_pinjam = $_POST['tanggal_pinjam'];
                    $id_agt = $_POST['id_agt'];
                    $nama = $_POST['nama'];
                    $jumlah_pinjaman = $_POST['jumlah_pinjaman'];
                    $lama_pinjaman = $_POST['lama_pinjaman'];
                    $bunga = $_POST['bunga'];
                    mysqli_query($koneksi, "UPDATE laporan_pinjaman SET no_bukti='$no_bukti',tanggal_pinjam='$tanggal_pinjam',id_agt='$id_agt',nama='$nama',jumlah_pinjaman='$jumlah_pinjaman, lama_pinjaman=$lama_pinjaman, bunga=$bunga ' WHERE id='$id'") or die(mysqli_error($koneksi));
                    echo "<script>alert('DATA BERHASIL DIUBAH!!');window.location='index.php';</script>";   
                }
            ?>
        </div>
    </div>

</body>
</html>