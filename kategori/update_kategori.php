<?php
include '../koneksi.php';

// ambil id dari URL
$id = $_GET['id'];

// ambil data jurusan berd  asarkan ID
$data = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id='$id'");
$d = mysqli_fetch_array($data);

// ambil data dari form
if (isset($_POST['simpan'])) {
    $kode_kategori = $_POST['kode_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    // DI WHERE HARUS MENGGUNAKAN FIELD PRIMARY CONTOHNYA 'id'
mysqli_query($koneksi, "UPDATE kategori SET 
            kode_kategori='$kode_kategori', 
            nama_kategori='$nama_kategori'
            WHERE id ='$id'");

// kembali ke halaman utama
header("Location: tampil_kategori.php");
exit;
}


?>

<html lang="en">

<head>
    <title>halaman update kategori</title>
</head>

<body>
    <h1 align="center">halaman update kategori</h1>
    <nav>
        <ul>
            <li><a href="../index.php">kembali ke dashboard</a></li>
        </ul>
    </nav> 

     <form action="" method="post">
    <label>kode kategori:</label><br>
        <input type="text" name="kode_kategori" value="<?= $d['kode_kategori'];?>"><br><br>

    <label>nama kategori:</label><br>
       <input type="text" name="nama_kategori" value="<?= $d['nama_kategori'];?>"><br><br>
        <input type="submit" name="simpan" value="update kategori">
    </form>
</body>

</html>