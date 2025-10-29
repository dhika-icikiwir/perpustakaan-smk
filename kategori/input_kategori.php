<?php
include "../koneksi.php";
if (isset($_POST['simpan'])) {
    $kode_kategori = $_POST['kode_kategori'];
    $nama_kategori = $_POST['nama_kategori'];


    $sql = "INSERT INTO kategori
                (kode_kategori,
                 nama_kategori)
              VALUES
                ('$kode_kategori',
                 '$nama_kategori')";

    $hasil = mysqli_query($koneksi, $sql);
    if ($hasil) {
        header('Location: tampil_kategori.php');
    } else {
?>"<script>
    alert('Gagal menyimpan data:');
</script>";
<?php
    }
}
?>


<html lang="en">

<head>
    <title>halaman input kategori</title>
</head>

<body>
    <h1 align="center">halaman input kategori</h1>
    <nav>
        <ul>
            <li><a href="../index.php">kembali ke dashboard</a></li>
        </ul>
    </nav> 

     <form action="input_kategori.php" method="post">
    <label>kode kategori:</label><br>
        <input type="text" name="kode_kategori" ><br><br>

    <label>nama kategori:</label><br>
       <input type="text" name="nama_kategori"><br><br>
        <input type="submit" name="simpan" value="input kategori">
    </form>
</body>

</html>