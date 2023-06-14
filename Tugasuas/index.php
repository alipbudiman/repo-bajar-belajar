<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sub/assets/css/style.css">
    <title>LAPORAN PINJAMAN ANGGOTA KOPERASI</title>
</head>
<body class="body-main">
    <div class="container col-md-6 mt-4 main">
        <div class="card">
            <div class="card-header bg-success text-white" >
                <h1>LAPORAN PINJAMAN ANGGOTA KOPERASI</h1>
                <h3>Bulan: Jan - 2023</h3>
                <div class="container button_spacing">
                    <a href="tambah.php" class="btn btn-sm btn-primary float-end">Tambah</a>
                </div>
                <div class="container button_spacing">
                    <a href="sub/daftar_anggota.php" class="btn btn-sm btn-secondary float-end">Daftar Anggota</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered bg-white">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">No. Bukti</th>
                            <th rowspan="2">Tanggal Pinjam</th>
                            <th rowspan="2">Id_Agt</th>
                            <th rowspan="2">Nama</th>
                            <th rowspan="2">Jumlah Pinjaman</th>
                            <th rowspan="2">Lama Pinjam (Bln)</th>
                            <th rowspan="2">Bunga/ Tahun (%)</th>
                            <th rowspan="2">Jenis</th>
                            <th colspan="2">Angsuran</th>
                            <th rowspan="2">Jumlah</th>
                            <th rowspan="2">Aksi</th>
                        </tr>
                        <tr>
                            <th>Pokok</th>
                            <th>Bunga</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php 
                                include('koneksi.php'); //memanggil file koneksi
                                $datas = mysqli_query($koneksi, "select * from laporan_pinjaman") or die(mysqli_error($koneksi));
                                $no = 1;//untuk 
                                $total_jumlah_pinjaman = 0;
                                $total_pokok = 0;
                                $total_bunga = 0;
                                $total_jumlah = 0;
                                while($row = mysqli_fetch_assoc($datas)) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['no_bukti']; ?></td>
                                    <td><?= $row['tanggal_pinjam']; ?></td>
                                    <td><?= $row['id_agt']; ?></td>
                                    <td style="width: 100px;"><?= $row['nama']; ?></td>
                                    <td style="width: 100px;">Rp <?= number_format($row['jumlah_pinjaman'], 0, ',', '.'); ?></td>
                                    <td><?= $row['lama_pinjaman']; ?></td>
                                    <td><?= $row['bunga']; ?></td>
                                    <td style="width: 100px;">
                                    <?php
                                        if(intval($row['lama_pinjaman']) <= 36){
                                            echo "Jangka pendek";
                                        } else {
                                            echo "Jangka pnjang";
                                        }
                                    ?>
                                    </td>
                                    <td style="width: 100px;">
                                        <?php
                                        $pokok = intval($row['jumlah_pinjaman']) / intval($row['lama_pinjaman']);
                                        echo "Rp ".number_format($pokok, 0, ',', '.') ;
                                        ?>
                                    </td>
                                    <td style="width: 100px;">
                                        <?php
                                        $bunga = intval($row['jumlah_pinjaman']) * (intval($row['bunga'])/100);
                                        echo "Rp ".number_format($bunga, 0, ',', '.');
                                        ?>
                                    </td>
                                    <td style="width: 100px;">
                                        <?php
                                        echo "Rp ".number_format($pokok+$bunga,0,',','.');
                                        ?>
                                    </td>
                                    <td style="width: 100px;">
                                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit </a>
                                        <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus </a>
                                    </td>
                                </tr>
                            <?php
                                $total_jumlah_pinjaman += $row['jumlah_pinjaman'];
                                $total_pokok += $pokok;
                                $total_bunga += $bunga;
                                $total_jumlah += $pokok+$bunga;
                                $no++; 
                                }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">Total Keseluruhan</td>
                                <td><?="Rp ". number_format($total_jumlah_pinjaman,0,',','.')?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><?="Rp. ". number_format($total_pokok,0,',','.')?></td>
                                <td><?="Rp. ". number_format($total_bunga,0,',','.')?></td>
                                <td><?="Rp. ". number_format($total_jumlah,0,',','.')?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>