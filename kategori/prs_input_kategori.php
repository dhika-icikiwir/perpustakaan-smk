<?php
include "../koneksi.php";
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
?>