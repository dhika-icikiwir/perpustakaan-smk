<html lang="en">

<head>
    <title>halaman input kategori</title>
</head>

<body>
    <h1 align="center">halaman input kategori</h1>
    <nav>
        <ul>
            <li><a href="../index.php">dashboard</a></li>
            <li><a href="../buku/tampil_buku.php">tampil buku</a></li>
            <li><a href="../peminjaman/tampil_peminjaman.php">tampil peminjaman</a></li>
            <li><a href="../anggota/tampil_anggota.php">tampil anggota</a></li>
        </ul>
    </nav> 

     <form action="tampil_kategori.php" method="post">
    <label>kode kategori:</label><br>
        <input type="text" ><br><br>

    <label>nama kategori:</label><br>
       <input type="text"><br><br>
        <input type="submit" value="input kategori">
    </form>
</body>

</html>