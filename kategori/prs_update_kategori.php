<?php
include '../koneksi.php';
// ambil data dari form
    $id = $_POST['id'];
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

