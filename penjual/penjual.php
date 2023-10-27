
<html>
    <a href="../run.php"><h1>Kembali</h1></a>
</html>

<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM penjual ORDER BY id_p DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Tambah Penjual</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Nama</th> <th>No_HP</th> <th>Alamat</th> <th>Update</th>
    </tr>
    <?php  
    while($penjual_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$penjual_data['nama_penjual']."</td>";
        echo "<td>".$penjual_data['no_hp']."</td>";
        echo "<td>".$penjual_data['alamat']."</td>";    
        echo "<td><a href='edit.php?id_p=$penjual_data[id_p]'>Edit</a> | <a href='delete.php?id_p=$penjual_data[id_p]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>