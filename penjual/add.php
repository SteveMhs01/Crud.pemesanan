<html>

<head>
    <title>Add Menu</title>
</head>

<body>
    <a href="penjual.php">Kembali</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_penjual"></td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $nama = $_POST['nama_penjual'];
        $no = $_POST['no_hp'];
        $alamat = $_POST['alamat'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO penjual(nama_penjual, no_hp, alamat) VALUES('$nama', '$no', '$alamat')");

        // Show message when user added
        echo "Penjual berhasil ditambah. <a href='penjual.php'>Lihat penjual</a>";
    }
    ?>
</body>

</html>