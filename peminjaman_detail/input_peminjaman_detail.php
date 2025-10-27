<html lang="en">

<head>
    <title>halaman input peminjaman detail</title>
</head>

<body>
    <h1 align="center">halaman input peminjaman detail</h1>
    <nav>
        <ul>
            <li><a href="../index.php">dashboard</a></li>
            <li><a href="../buku/tampil_buku.php">tampil buku</a></li>
            <li><a href="../peminjaman/tampil_peminjaman.php">tampil peminjaman</a></li>
            <li><a href="../anggota/tampil_anggota.php">tampil anggota</a></li>
        </ul>
    </nav> 

     <form action="tampil_peminjaman_detail.php" method="post">
    <label>id peminjaman</label><br>
        <input type="text"><br><br>

    <label>id buku:</label><br>
        <input type="text" ><br><br>

    <label>jumlah:</label><br>
       <input type="number"><br><br>
        <input type="submit" value="input peminjaman detail">
    </form>
</body>

</html>