<html lang="en">

<head>
    <title>halaman input penerbit</title>
</head>

<body>
    <h1 align="center">halaman input penerbit</h1>
    <nav>
        <ul>
            <li><a href="../index.php">dashboard</a></li>
            <li><a href="../buku/tampil_buku.php">tampil buku</a></li>
            <li><a href="../peminjaman/tampil_peminjaman.php">tampil peminjaman</a></li>
            <li><a href="../anggota/tampil_anggota.php">tampil anggota</a></li>
        </ul>
    </nav> 

     <form action="tampil_penerbit.php" method="post">
    <label>kode penerbit:</label><br>
        <input type="text" ><br><br>

    <label>nama penerbit:</label><br>
       <input type="text"><br><br>
        <input type="submit" value="input penerbit">
    </form>
</body>

</html>