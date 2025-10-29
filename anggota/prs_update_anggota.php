<?php
include "../koneksi.php";
$id = $_POST['id'];
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
?>