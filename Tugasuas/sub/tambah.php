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
            <?php
                include "../koneksi.php";
                // count number
                $num = mysqli_query($koneksi, "SELECT COUNT(*) AS id FROM daftar_anggota;");
                $row = mysqli_fetch_assoc($num);
                $total = intval($row['id']);
                $id = $total + 1;
            ?>
            <div class="card-body">
                
                <form action="" method="post" role="form">
                    <!-- ============NIM============== -->
                    <div class="form-group">
                        <label>NAMA ANGGOTA</label>
                        <input type="text" class="form-control" name="nama"  require>
                    </div>
                    <!-- ============NAMA============== -->
                    <div class="form-group">
                        <label>ID ANGGOTA</label>
                        <input type="text" class="form-control" name="id_agt" value=<?php echo("A00".$id)?> readonly>
                    </div>
                    <!-- ============STATUS============== -->
                    <div class="form-group">
                        <label>STATUS</label>
                        <fieldset>
                            <label>
                                <input type="radio" name="status" value="active" checked>
                                Aktif
                                </label>
                            <label>
                                <input type="radio" name="status" value="unactive">
                                Tidak Aktif
                            </label>
                        </fieldset>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">
                        Simpan Data
                    </button>
                </form>

                <?php
                    if (isset($_POST["submit"])) {
                        $nama = $_POST['nama'];
                        $id_agt = $_POST['id_agt'];
                        $status = $_POST['status'];
                        // count number
                        $num = mysqli_query($koneksi, "SELECT COUNT(*) AS id FROM daftar_anggota;");
                        $row = mysqli_fetch_assoc($num);
                        $total = intval($row['id']);
                        $id = $total + 1;
                        
                        mysqli_query($koneksi, "INSERT INTO daftar_anggota(id, nama, id_agt, status) VALUES ('$id','$nama','$id_agt','$status')") or die (mysqli_error($koneksi));
                        echo "<script> alert('Data berhasil di simpan!!');window.location='daftar_anggota.php'; </script>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>