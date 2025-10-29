<html lang="en">

<head>
    <title>halaman input user</title>
</head>

<body>
    <h1 align="center">halaman input user</h1>
    <nav>
        <ul>
            <li><a href="../index.php">kembali ke dashboard</a></li>
        </ul>
    </nav> 

     <form action="prs_input_user.php" method="post">
    <label>nama:</label><br>
        <input type="text" name="nama"><br><br>

    <label>username:</label><br>
        <input type="text" name="username"><br><br>

    <label>password:</label><br>
        <input type="password" name="password"><br><br>

    <label>level:</label><br>
        <select name="level">
            <option value="admin">admin</option>
            <option value="petugas">petugas</option>
        </select><br><br>
        <input type="submit" value="input user">
    </form>
</body>

</html>