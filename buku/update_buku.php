<html lang="en">

<head>
    <title>halaman update buku</title>
</head>

<body>
    <h1 align="center">halaman update buku</h1>
    <nav>
        <ul>
            <li><a href="../index.php">dashboard</a></li>
            <li><a href="../buku/tampil_buku.php">tampil buku</a></li>
            <li><a href="../peminjaman/tampil_peminjaman.php">tampil peminjaman</a></li>
            <li><a href="../anggota/tampil_anggota.php">tampil anggota</a></li>
        </ul>
    </nav> 

     <form action="tampil_buku.php" method="post">
    <label>Kode buku:</label><br>
        <input type="text"><br><br>

    <label>judul buku:</label><br>
        <input type="text" ><br><br>

    <label>id kategori:</label><br>
        <input type="number"><br><br>

    <label>id penerbit:</label><br>
        <input type="number"><br><br>

    <label>isbn:</label><br>
        <input type="text"><br><br>

    <label>pengarang:</label><br>
        <input type="text"><br><br>

    <label>jumlah halaman:</label><br>
        <input type="text"><br><br>

    <label>jumlah stok:</label><br>
        <input type="text"><br><br>

    <label>tahun terbit:</label><br>
        <input type="text"><br><br>

    <label>sinopsis:</label><br>
        <input type="text"><br><br>

    <label>gambar:</label><br>
        <input type="file"><br><br>
        <input type="submit" value="update buku">
    </form>
</body>

</html>