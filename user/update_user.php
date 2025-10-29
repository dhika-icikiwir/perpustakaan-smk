<?php
include '../koneksi.php';

// ambil id dari URL
$id = $_GET['id'];
// ambil data jurusan berd  asarkan ID
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<html lang="en">

<head>
    <title>halaman update user</title>
</head>

<body>
    <h1 align="center">halaman update user</h1>
    <nav>
        <ul>
            <li><a href="../index.php">kembali ke dashboard</a></li>
        </ul>
    </nav> 

     <form action="prs_update_user.php" method="post">
    <input type="hidden" name="id" value="<?= $d['id']; ?>">
    <label>nama:</label><br>
        <input type="text" name="nama" value="<?=$d['nama'];?>"><br><br>

    <label>username:</label><br>
        <input type="text" name="username" value="<?=$d['username'];?>"><br><br>

    <label>password:</label><br>
        <input type="password" name="password" value="<?=$d['password'];?>"><br><br>


    <label>level:</label><br>
        <select name="level">
            <option value="admin"<?=$d['level'];?>>admin</option>
            <option value="petugas"<?=$d['level'];?>>petugas</option>
        </select><br><br>
        <input type="submit" value="update user">
    </form>
</body>

</html>