
<html lang="en">

<head>
    <title>halaman tampil pengembalian</title>
</head>

<body>
    <h1 align="center">halaman tampil pengembalian</h1>
    <nav>
        <ul>
            <li><a href="../index.php">dashboard</a></li>
            <li><a href="../buku/tampil_buku.php">tampil buku</a></li>
            <li><a href="../peminjaman/tampil_peminjaman.php">tampil peminjaman</a></li>
            <li><a href="../anggota/tampil_anggota.php">tampil anggota</a></li>
        </ul>
    </nav> 

    <table border="1">
        <tr>
            <th>id</th>
            <th>id peminjaman</th>
            <th>tanggal kembali</th>
            <th>id user</th>
            <th colspan="2">opsi</th>
        </tr>
        <td>1</td>
        <td>1</td>
        <td>22/10/2024</td>
        <td>1</td>
        <td><a href="update_pengembalian.php">edit</a></td>
        <td>delete</td>
    </table>
    <a href="input_pengembalian.php">+ tambah pengembalian</a>
</body>

</html>