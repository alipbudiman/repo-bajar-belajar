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
                    $data=mysqli_query($koneksi, "SELECT * FROM listrik WHERE id='$id'");
                    $row=mysqli_fetch_assoc($data);

                ?>
            </div>
            <form action="" method="post" role="form" id="myForm">
            <div class="form-group">
                    <label>NO REKENING</label>
                        <input type="text" class="form-control" name="no_rek" value=<?=$row['no_rek']?>  require>
                    </div>
                    <div class="form-group">
                        <label>NAMA PELANGGAN</label>
                        <input type="text" class="form-control" name="nama" value=<?=$row['nama']?> require>
                    </div>
                    <div class="form-group">
                        <label>DAYA (V)</label>
                        <input type="number" class="form-control" name="daya" value=<?=$row['daya']?> require>
                    </div>
                    <div class="form-group">
                        <label>METERAN BULAN LALU</label>
                        <input type="number" class="form-control" name="bulan_lalu" value=<?=$row['bulan_lalu']?> require>
                    </div>
                    <div class="form-group">
                        <label>METERAN BULAN INI</label>
                        <input type="number" class="form-control" name="bulan_ini" value=<?=$row['bulan_ini']?> require>
                    </div>
                    <div class="form-group">
                        <label>TANGGAL BAYAR</label>
                        <input type="date" class="form-control" name="tanggal_bayar" value=<?=$row['tanggal_bayar']?> require>
                    </div>
                
                <button type="submit" class="btn btn-primary" name="submit" value="simpan">
                    Update Data
                </button>
            </form>
            <?php
                if(isset($_POST['submit'])) {
                    $no_rek = $_POST['no_rek'];
                    $nama = $_POST['nama'];
                    $daya = intval($_POST['daya']);
                    $bulan_lalu = intval($_POST['bulan_lalu']);
                    $bulan_ini = intval($_POST['bulan_ini']);
                    $tanggal_bayar = $_POST['tanggal_bayar'];
                    mysqli_query($koneksi, "UPDATE listrik SET no_rek='$no_rek',daya='$daya',bulan_lalu='$bulan_lalu',bulan_ini='$bulan_ini', tanggal_bayar='$tanggal_bayar' WHERE id='$id'") or die(mysqli_error($koneksi));
                    echo "<script>alert('DATA BERHASIL DIUBAH!!');window.location='index.php';</script>";   
                }
            ?>
        </div>
    </div>

</body>
</html>