<?php 

$id = $_POST['id'];


$destination_db=mysqli_connect("localhost", "root", "", "cart");
$a=$destination_db->query("DELETE FROM item WHERE id=".$id." ");
echo $a;
// // Close the database connections
// $source_db->close();
// $destination_db->close();

?>