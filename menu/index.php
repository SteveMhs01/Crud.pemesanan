
<html>
    <a href="../run.php"><h1>Kembali</h1></a>
</html>

<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = "SELECT menu.*, penjual.nama_penjual FROM menu JOIN penjual ON menu.id_penjual = penjual.id_p";
$data = mysqli_query($mysqli, $result);
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add New Menu</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Nama</th> <th>Jenis</th> <th>Harga</th> <th>Penjual</th> <th>Update</th>
    </tr>
    <?php  
    while($menu_data = mysqli_fetch_array($data)) {         
        echo "<tr>";
        echo "<td>".$menu_data['nama']."</td>";
        echo "<td>".$menu_data['jenis']."</td>";
        echo "<td>".$menu_data['harga']."</td>";  
        echo "<td>".$menu_data['nama_penjual']."</td>";
        echo "<td><a href='edit.php?id=" . $menu_data['id'] . "'>Edit</a> | <a href='delete.php?id=" . $menu_data['id'] . "'>Delete</a></td></tr>";         
    }
    ?>
    </table>
</body>
</html>