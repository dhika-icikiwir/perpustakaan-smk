<?php
include "../koneksi.php";
$no = 1;
$sql = "SELECT * FROM user";
$data = mysqli_query($koneksi, $sql);
?>
<html lang="en">

<head>
    <title>halaman tampil user</title>
</head>

<body>
    <h1 align="center">halaman tampil user</h1>
    <nav>
        <ul>
            <li><a href="../index.php">kembali ke dashboard</a></li>
        </ul>
    </nav> 

    <table border="1">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>username</th>
            <th>password</th>
            <th>level</th>
            <th colspan="2">opsi</th>
        </tr>
         <?php
        while($d = mysqli_fetch_array($data)){

            ?>
        <tr>
            <td><?=$no;?></td>
            <td><?=$d['nama'];?></td>
            <td><?=$d['username'];?></td>
            <td><?=$d['password'];?></td>
            <td><?=$d['level'];?></td>
        <td><a href="update_user.php?id=<?= $d['id']; ?>">edit</a></td>  
        <td><a href="delete_user.php?id=<?= $d['id']; ?>">delete</a></td>    
        </tr>
        <?php
        }
        $no++
        ?>
    </table>
    <a href="input_user.php">+ tambah user</a>
</body>

</html>