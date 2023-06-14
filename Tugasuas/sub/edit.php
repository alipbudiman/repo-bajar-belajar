<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <title>Edit Barang</title>
</head>
<body>
    <div class="container col-md-6 mt-4">
        <h1>Table Barang</h1>
        <div class="card">
            <div class="card-header bg-success text-white">
                Edit Data Barang
            </div>
            <div class="card-body">
                <?php
                    include "../koneksi.php";
                    $id=$_GET['id'];
                    $data=mysqli_query($koneksi, "SELECT * FROM daftar_anggota WHERE id='$id'");
                    $row=mysqli_fetch_assoc($data);

                ?>
            </div>
            <form action="" method="post" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label>NAMA ANGGOTA</label>
                    <input type="text" class="form-control" name="nama" value="<?=$row['nama'];?>" require>
                </div>
                <div class="form-group">
                    <label>ID ANGGOTA</label>
                    <input type="text" class="form-control" name="id_agt" value="<?=$row['id_agt'];?>" require>
                </div>
                <fieldset require>
                    <label>
                        <input type="radio" name="status" value="active"<?php if($row["status"] == "active") echo "checked";?>>
                        Aktif
                    </label>
                    <label>
                        <input type="radio" name="status" value="unactive" <?php if($row["status"] == "unactive") echo "checked";?>>
                        Tidak Aktif
                    </label>
                </fieldset>
                
                <button type="submit" class="btn btn-primary" name="submit" value="simpan">
                    Update Data
                </button>
            </form>
            <?php
                if(isset($_POST['submit'])) {
                    $nama = $_POST['nama'];
                    $id_agt = $_POST['id_agt'];
                    $status = $_POST['status'];
                    mysqli_query($koneksi, "UPDATE daftar_anggota SET nama='$nama',id_agt='$id_agt',status='$status' WHERE id='$id'") or die(mysqli_error($koneksi));
                    echo "<script>alert('DATA BERHASIL DIUBAH!!');window.location='daftar_anggota.php';</script>";   
                }
            ?>
        </div>
    </div>

</body>
</html>