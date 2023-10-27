<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id = $_GET['id_p'];
 
// Delete user row from table based on given id
// Hapus data yang terkait dari tabel menu
$result_menu = mysqli_query($mysqli, "DELETE FROM menu WHERE id_penjual=$id");

// Hapus penjual setelah data yang terkait dihapus
$result_penjual = mysqli_query($mysqli, "DELETE FROM penjual WHERE id_p=$id"); 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:penjual.php");
?>