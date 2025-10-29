<?php
include "../koneksi.php";
$no = 1;
$sql = "SELECT * FROM anggota";
$data = mysqli_query($koneksi, $sql);
?>
<html lang="en">

<head>
    <title>halaman tampil anggota</title>
</head>

<body>
    <h1 align="center">halaman tampil anggota</h1>
    <nav>
        <ul>
            <li><a href="../index.php">kembali ke dashboard</a></li>
        </ul>
    </nav> 

    <table border="1">
        <tr>
            <th>id</th>
            <th>kode anggota</th>
            <th>nama</th>
            <th>jenis kelamin</th>
            <th>tempat lahir</th>
            <th>taggal lahir</th>
            <th>no hp</th>
            <th>alamat</th>
            <th>foto</th>
            <th colspan="2">opsi</th>
        </tr>
        <?php
        while($d = mysqli_fetch_array($data)){

            ?>
        <tr>  
        <td><?= $no; ?></td>
        <td><?= $d['kode_anggota'];?></td>
        <td><?=$d['nama'];?></td>
        <td><?=$d['jenis_kelamin'];?></td>
        <td><?=$d['tempat_lahir'];?></td>
        <td><?=$d['tanggal_lahir'];?></td>
        <td><?=$d['telpon'];?></td>
        <td><?=$d['alamat'];?></td>
        <td><?=$d['foto'];?></td>
        <td><a href="update_anggota.php?id=<?= $d['id']; ?>">edit</a></td>  
        <td><a href="delete_anggota.php?id=<?= $d['id']; ?>">delete</a></td>    
    </tr>
    <?php
    $no++;  
    }
    ?>
    </table>
    <a href="input_anggota.php">+ tambah anggota</a>
</body>

</html>