<html lang="en">

<head>
    <title>halaman update user</title>
</head>

<body>
    <h1 align="center">halaman update user</h1>
    <nav>
        <ul>
            <li><a href="../index.php">dashboard</a></li>
            <li><a href="../buku/tampil_buku.php">tampil buku</a></li>
            <li><a href="../peminjaman/tampil_peminjaman.php">tampil peminjaman</a></li>
            <li><a href="../anggota/tampil_anggota.php">tampil anggota</a></li>
        </ul>
    </nav> 

     <form action="tampil_user.php" method="post">
    <label>nama:</label><br>
        <input type="text"><br><br>

    <label>username:</label><br>
        <input type="text" ><br><br>

    <label>password:</label><br>
        <input type="password" ><br><br>

    <label>level:</label><br>
        <select>
            <option>admin</option>
            <option>petugas</option>
        </select><br><br>
        <input type="submit" value="update user">
    </form>
</body>

</html>