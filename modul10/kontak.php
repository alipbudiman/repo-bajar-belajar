<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" type="text/css" href="assets/css/kontak.css">
</head>

<body>
    <?php
    // Memeriksa apakah form telah di-submit
    if (isset($_POST['submit'])) {
        // Memeriksa dan memperoleh nilai input dari form
        $vnama = $_POST['nama'];
        $vemail = $_POST['email'];
        $vpesan = $_POST['pesan'];
        $vjk = $_POST['jk'];
        $vkota = $_POST['kota'];

        // Membuat koneksi ke database
        $host="localhost";
        $vusername = "root";
        $vpassword = "";
        $dbname = "pakmuh";
        $conn = mysqli_connect($host, $username, $password, $dbname);

        // Memeriksa koneksi ke database
        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Menambahkan rekord baru ke dalam tabel kontak
        $sql="insert mydata set nama='$vnama', jk='$vjk', email='$vemail', alamat='$valamat', kota='$vkota', pesan='$vpesan';";
        mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
        mysqli_close($conn);
        // Menutup koneksi ke database
        mysqli_close($conn);
    }
?>

    <form method="post" action="simpan_kontak.php">
        <div id="login-box">
            <div class="left-box">
            <input type="text" name="nama" placeholder="Nama" required/>
            <input type="text" name="email" placeholder="Email"/>
            <input type="radio" name="jk" value="Laki-laki"> Laki-laki
            <input type="radio" name="jk" value="Perempuan"> Perempuan
            <input type="text" name="alamat" placeholder="Alamat"/>
            <input type="text" name="kota" placeholder="Kota"/>
            <textarea name="pesan" id="pesan" placeholder="Pesan"></textarea>
            <input type="submit" name="submit" value="kirim" placeholder="Kirim"/>
            </div>
            <div class="right-box">
            </div>
            <div class="or">X</div>
        </div> 
    </form>
    
</body>
</html>
