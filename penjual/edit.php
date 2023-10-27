<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id_p'];
    
    $nama=$_POST['nama_penjual'];
    $no=$_POST['no_hp'];
    $alamat=$_POST['alamat'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE penjual SET nama_penjual='$nama', no_hp='$no', alamat='$alamat' WHERE id_p=$id");
 
    
    // Redirect to homepage to display updated user in list
    header("Location: penjual.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id_p'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM penjual WHERE id_p=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama_penjual'];
    $no = $user_data['no_hp'];
    $alamat = $user_data['alamat'];
}
?>
<html>
<head>	
    <title>Edit Menu Data</title>
</head>
 
<body>
    <a href="penjual.php">Kembali</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama_penjual" value=<?php echo $nama;?>></td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td><input type="text" name="no_hp" value=<?php echo $no;?>></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_p" value=<?php echo $_GET['id_p'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>