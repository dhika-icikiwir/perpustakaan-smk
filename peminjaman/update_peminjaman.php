<html lang="en">

<head>
    <title>halaman update peminjaman</title>
</head>

<body>
    <h1 align="center">halaman update peminjaman</h1>
    <nav>
        <ul>
            <li><a href="../index.php">dashboard</a></li>
            <li><a href="../buku/tampil_buku.php">tampil buku</a></li>
            <li><a href="../peminjaman/tampil_peminjaman.php">tampil peminjaman</a></li>
            <li><a href="../anggota/tampil_anggota.php">tampil anggota</a></li>
        </ul>
    </nav> 

     <form action="tampil_peminjaman.php" method="post">
    <label>tanggal pinjam:</label><br>
        <input type="date"><br><br>

    <label>lama pinjam:</label><br>
        <input type="text" ><br><br>

    <label>keterangan:</label><br>
       <input type="text"><br><br>

    <label>status:</label><br>
         <select>
            <option>dipinjam</option>
            <option>dikembalikan</option>
        </select>

    <label>id anggota:</label><br>
        <input type="date"><br><br>

    <label>id user:</label><br>
        <input type="text"><br><br>
        <input type="submit" value="update peminjaman">
    </form>
</body>

</html>