<?php
include '../koneksi.php';
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
?>