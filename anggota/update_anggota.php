<?php
include '../koneksi.php';

// ambil id dari URL
$id = $_GET['id'];

// ambil data jurusan berd  asarkan ID
$data = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id='$id'");
$d = mysqli_fetch_array($data);

// ambil data dari form
if(isset($_POST['simpan'])){
$kode_anggota = $_POST['kode_anggota'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$telpon = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$foto = '';

// DI WHERE HARUS MENGGUNAKAN FIELD PRIMARY CONTOHNYA 'id'
mysqli_query($koneksi, "UPDATE anggota SET 
            kode_anggota='$kode_anggota', 
            nama='$nama',
            jenis_kelamin='$jenis_kelamin',
            tempat_lahir='$tempat_lahir',
            tanggal_lahir='$tanggal_lahir',
            telpon='$telpon',
            alamat='$alamat',
            foto='$foto'
            WHERE id ='$id'");

// kembali ke halaman utama
header("Location: tampil_anggota.php");
exit;
}
?>

<html lang="en">

<head>
    <title>halaman update anggota</title>
</head>

<body>
    <h1 align="center">halaman update anggota</h1>
    <nav>
        <ul>
            <li><a href="../index.php">kembali ke dashboard</a></li>
        </ul>
    </nav> 

        <form action="" method="post">
        <label>Kode Anggota:</label><br>
        <input type="text" name="kode_anggota" value="<?=$d['kode_anggota'];?>" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?=$d['nama'];?>" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <select name="jenis_kelamin"  value="<?=$d['jenis_kelamin'];?>">
            <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
        </select><br><br>

        <label>Tempat Lahir:</label><br>
        <input type="text" name="tempat_lahir" value="<?=$d['tempat_lahir'];?>"><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" value="<?=$d['tanggal_lahir'];?>"><br><br>

        <label>No HP:</label><br>
        <input type="number" name="no_hp" value="<?=$d['telpon'];?>"><br><br>

        <label>Alamat:</label><br>
        <input type="text" name="alamat" value="<?=$d['alamat'];?>"><br><br>

        <input type="submit" name="simpan" value="update Anggota">
    </form>
</body>

</html>