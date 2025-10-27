<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
    $kode_anggota = $_POST['kode_anggota'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $telpon = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $foto = '';


    $sql = "INSERT INTO anggota 
                (kode_anggota,
                 nama, 
                 jenis_kelamin,
                 tempat_lahir, 
                 tanggal_lahir, 
                 telpon, 
                 alamat, 
                 foto)
              VALUES
                ('$kode_anggota',
                 '$nama', 
                 '$jenis_kelamin',
                 '$tempat_lahir', 
                 '$tanggal_lahir',
                 '$telpon', 
                 '$alamat', 
                 '$foto')";

    $hasil = mysqli_query($koneksi, $sql);
    if ($hasil) {
        header('Location: tampil_anggota.php');
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
    <title>Halaman Input Anggota</title>
</head>

<body>
    <h1 align="center">Halaman Input Anggota</h1>
    <nav>
        <ul>
            <li><a href="../index.php">Dashboard</a></li>
            <li><a href="../buku/tampil_buku.php">Tampil Buku</a></li>
            <li><a href="../peminjaman/tampil_peminjaman.php">Tampil Peminjaman</a></li>
            <li><a href="../anggota/tampil_anggota.php">Tampil Anggota</a></li>
        </ul>
    </nav>

    <form action="" method="post">
        <label>Kode Anggota:</label><br>
        <input type="text" name="kode_anggota" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <select name="jenis_kelamin">
            <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
        </select><br><br>

        <label>Tempat Lahir:</label><br>
        <input type="text" name="tempat_lahir"><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir"><br><br>

        <label>No HP:</label><br>
        <input type="text" name="no_hp"><br><br>

        <label>Alamat:</label><br>
        <input type="text" name="alamat"><br><br>

        <input type="submit" name="simpan" value="Input Anggota">
    </form>
</body>

</html>