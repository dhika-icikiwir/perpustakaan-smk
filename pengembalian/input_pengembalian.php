<html lang="en">

<head>
    <title>halaman input pegembalian</title>
</head>

<body>
    <h1 align="center">halaman input pengembalian</h1>
    <nav>
        <ul>
            <li><a href="../index.php">kembali ke dashboard</a></li>
        </ul>
    </nav> 

    <form action="tampil_pengembalian.php" method="post">

        <label>id peminjaman:</label><br>
        <input type="text"><br><br>

        <label>tanggal kembali:</label><br>
        <input type="date"><br><br>

        <label>id user:</label><br>
        <input type="text"><br><br>
        <input type="submit" value="input pengembalian">
    </form>
</body>

</html>