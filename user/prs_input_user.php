<?php
include '../koneksi.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];


    $sql = "INSERT INTO user 
                (`nama`,
                 `username`, 
                 `password`,
                 `level`)
              VALUES
                ('$nama',
                 '$username', 
                 '$password',
                 '$level')";

    $hasil = mysqli_query($koneksi, $sql);
    if ($hasil) {
        header('Location: tampil_user.php');
    } else {
?>"<script>
    alert('Gagal menyimpan data:');
</script>";
<?php
    }
?>