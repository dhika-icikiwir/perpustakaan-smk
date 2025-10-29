

<html lang="en">

<head>
    <title>Halaman Input Anggota</title>
</head>

<body>
    <h1 align="center">Halaman Input Anggota</h1>
    <nav>
        <ul>
            <li><a href="../index.php">kembali ke dashboard</a></li>
        </ul>
    </nav> 

    <form action="prs_input_anggota.php" method="post">
        <label>Kode Anggota:</label><br>
        <input type="text" name="kode_anggota" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <select name="jenis_kelamin">
            <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
        </select><br><br>

        <label>Tempat Lahir:</label><br>
        <input type="text" name="tempat_lahir"><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir"><br><br>

        <label>No HP:</label><br>
        <input type="text" name="no_hp"><br><br>

        <label>Alamat:</label><br>
        <input type="text" name="alamat"><br><br>

        <input type="submit" value="Input Anggota">
    </form>
</body>

</html>