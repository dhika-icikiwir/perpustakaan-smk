<html lang="en">

<head>
    <title>halaman input peminjaman</title>
</head>

<body>
    <h1 align="center">halaman input peminjaman</h1>
    <nav>
        <ul>
            <li><a href="../index.php">kembali ke dashboard</a></li>
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
        <input type="submit" value="input peminjaman">
    </form>
</body>

</html>