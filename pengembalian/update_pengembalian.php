<html lang="en">

<head>
    <title>halaman update pegembalian</title>
</head>

<body>
    <h1 align="center">halaman update pengembalian</h1>
    <nav>
        <ul>
            <li><a href="../index.php">dashboard</a></li>
            <li><a href="../buku/tampil_buku.php">tampil buku</a></li>
            <li><a href="../peminjaman/tampil_peminjaman.php">tampil peminjaman</a></li>
            <li><a href="../anggota/tampil_anggota.php">tampil anggota</a></li>
        </ul>
    </nav>

    <form action="tampil_pengembalian.php" method="post">

        <label>id peminjaman:</label><br>
        <input type="text"><br><br>

        <label>tanggal kembali:</label><br>
        <input type="date"><br><br>

        <label>id user:</label><br>
        <input type="text"><br><br>
        <input type="submit" value="update pengembalian">
    </form>
</body>

</html>