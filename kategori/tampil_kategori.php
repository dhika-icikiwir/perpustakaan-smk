<?php
include "../koneksi.php";
$no = 1;
$sql = "SELECT * FROM kategori";
$data = mysqli_query($koneksi, $sql);
?>
<html lang="en">

<head>
    <title>halaman tampil kategori</title>
</head>

<body>
    <h1 align="center">halaman tampil kategori</h1>
    <nav>
        <ul>
            <li><a href="../index.php">kembali ke dashboard</a></li>
        </ul>
    </nav> 

    <table border="1">
        <tr>
            <th>id</th>
            <th>kode kategori</th>
            <th>nama kategori</th>
            <th colspan="2">opsi</th>
        </tr>
        <tr>
            <?php
        while($d = mysqli_fetch_array($data)){
            
            ?>
        <td><?=$no;?></td>
        <td><?= $d['kode_kategori'];?></td> 
        <td><?= $d['nama_kategori'];?></td> 
        <td><a href="update_kategori.php?id=<?= $d['id']; ?>">edit</a></td>  
        <td><a href="delete_kategori.php?id=<?= $d['id']; ?>">delete</a></td>    
    </tr>
    <?php
    $no++;
        }
    ?>
    </table>
    <a href="input_kategori.php">+ tambah kategori</a>
</body>

</html>