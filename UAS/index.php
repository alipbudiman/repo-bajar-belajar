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
    <title>DAFTAR PEMBAYARAN REKENING LISTRIK</title>
</head>
<body class="body-main">
    <div class="container col-md-6 mt-4 main">
        <div class="card">
            <div class="card-header bg-success text-white" >
                <h1>DAFTAR PEMBAYARAN REKENING LISTRIK</h1>
                <h3>Nama: Alif Budiman Wahabbi | Nim: 225520211008</h3>
                <div class="container button_spacing">
                    <a href="tambah.php" class="btn btn-sm btn-primary float-end">Tambah</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered bg-white">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">No. Rek</th>
                            <th rowspan="2">Nama Pelanggan</th>
                            <th rowspan="2">Daya</th>
                            <th colspan="2">Meter</th>
                            <th rowspan="2">Tanggal bayar</th>
                            <th rowspan="2">Tarif / KWH</th>
                            <th rowspan="2">Jumlah pakai</th>
                            <th rowspan="2">Denda</th>
                            <th rowspan="2">Total</th>
                            <th rowspan="2">Aksi</th>
                        </tr>
                        <tr>
                            <th>Bulan lalu</th>
                            <th>Bulan ini</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php 
                                include('koneksi.php');
                                $datas = mysqli_query($koneksi, "select * from listrik") or die(mysqli_error($koneksi));
                                $no = 1;
                                while($row = mysqli_fetch_assoc($datas)) {
                            ?>
                                <tr>
                                    <?php
                                    $tarif = 0;
                                    $jumlah_pakai = $row['bulan_ini'] - $row['bulan_lalu'];
                                    $dy = $row['daya'];
                                    if ($dy <= 900) {
                                        $tarif = 1550;
                                    } elseif ($dy > 900 && $dy <= 1300) {
                                        $tarif = 1450;
                                    } elseif ($dy > 1300 && $dy <= 2200) {
                                        $tarif = 1850;
                                    } elseif ($dy > 2200) {
                                        $tarif = 2250;
                                    }
                                    ?>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['no_rek']; ?></td>
                                    <td><?= $row['nama']; ?></td>
                                    <td><?= $dy; ?> V</td>
                                    <td><?= $row['bulan_lalu']; ?> KWH</td>
                                    <td><?= $row['bulan_ini']; ?> KWH</td>
                                    <td><?= $row['tanggal_bayar']; ?></td>
                                    <td> Rp <?= number_format($tarif , 0, ',', '.'); ?> </td>
                                    <td> <?= $jumlah_pakai; ?> KWH</td>
                                    <td>
                                        <?php
                                        $date_obj = new DateTime($row['tanggal_bayar']);
                                        $d = $date_obj->format("d");
                                        if (intval($d) > 20) {
                                            echo "Rp ".number_format(($tarif * $jumlah_pakai) * 0.02, 0, ',', '.');
                                        } else {
                                            echo "-";
                                        }
                                        ?>
                                    </td>
                                    <td>Rp. <?= number_format(($tarif * $jumlah_pakai) * 0.1, 0, ',', '.'); ?></td>
                                    <td style="width: 100px;">
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