
<html lang="en">

<head>
    <title>halaman tampil kategori</title>
</head>

<body>
    <h1 align="center">halaman tampil kategori</h1>
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
            <th>kode kategori</th>
            <th>nama kategori</th>
            <th colspan="2">opsi</th>
        </tr>
        <td>1</td>
        <td>88409832</td> 
        <td>komik</td>
        <td><a href="update_kategori.php">edit</a></td>
        <td>delete</td>
    </table>
    <a href="input_kategori.php">+ tambah kategori</a>
</body>

</html>