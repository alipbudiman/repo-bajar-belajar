<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>DAFTAR ANGGOTA</title>
</head>
<body class="body-main">
    <div class="container col-md-6 mt-4 main">
        <h1>DAFTAR ANGGOTA</h1>
        <div class="card" style="width: 1000px;">
            <div class="card-header bg-success text-white" >
                <div class="container button_spacing">
                    <a href="tambah.php" class="btn btn-sm btn-primary float-end">Tambah</a>
                </div>
                <div class="container button_spacing">
                    <a href="../index.php" class="btn btn-sm btn-secondary float-end">Daftar Pinjaman</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered bg-white">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA ANGGOTA</th>
                                <th>ID ANGGOTA</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include('../koneksi.php'); //memanggil file koneksi
                                $datas = mysqli_query($koneksi, "select * from daftar_anggota") or die(mysqli_error($koneksi));
                                $no = 1;//untuk 
                                while($row = mysqli_fetch_assoc($datas)) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['nama']; ?></td>
                                    <td><?= $row['id_agt']; ?></td>
                                    <td><?= $row['status']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit </a>
                                        <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus </a>
                                    </td>
                                </tr>
                            <?php
                                $no++; 
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>