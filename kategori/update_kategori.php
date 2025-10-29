<?php
include '../koneksi.php';

// ambil id dari URL
$id = $_GET['id'];
// ambil data jurusan berd  asarkan ID
$data = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id='$id'");
$d = mysqli_fetch_array($data);


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

     <form action="prs_update_kategori.php" method="post">
    <input type="hidden" name="id" value="<?= $d['id']; ?>">
    <label>kode kategori:</label><br>
        <input type="text" name="kode_kategori" value="<?= $d['kode_kategori'];?>"><br><br>

    <label>nama kategori:</label><br>
       <input type="text" name="nama_kategori" value="<?= $d['nama_kategori'];?>"><br><br>
        <input type="submit" value="update kategori">
    </form>
</body>

</html>