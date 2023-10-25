<html>

<head>
    <title>Add Menu</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td><select name="jenis">
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                    </select></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Penjual</td>
                <td> <select name="id_p">
                        <?php
                        include_once("config.php");
                        $penjual = mysqli_query($mysqli, "SELECT * FROM penjual ORDER BY id_p DESC");
                        while ($user_data = mysqli_fetch_array($penjual)) {
                            echo '<option value ="' . $user_data['id_p'] . '">' . $user_data['nama_penjual'] . '</option>';
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $harga = $_POST['harga'];
        $id_p = $_POST['id_p'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO menu(nama, jenis, harga, id_penjual) VALUES('$nama', '$jenis', '$harga', '$id_p')");

        // Show message when user added
        echo "Menu added successfully. <a href='index.php'>View Menu</a>";
    }
    ?>
</body>

</html>