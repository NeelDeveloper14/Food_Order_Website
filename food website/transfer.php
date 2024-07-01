<?php 
// echo "<script>alert('dgfhjhkjl;l')</script>";
$source_db=mysqli_connect("localhost", "root", "", "food1");

// Retrieve the record ID from the AJAX request
$id = $_POST['id'];

// Fetch the record from the source database
$result = $source_db->query("SELECT * FROM item WHERE id = " . $id);
$ans=mysqli_fetch_array($result);
// $row = $result->fetch_assoc();

// // Insert the record into the destination database
$destination_db=mysqli_connect("localhost", "root", "", "cart");
$a=$destination_db->query("INSERT INTO item VALUES ($ans[0],'$ans[1]','$ans[2]',$ans[3],'$ans[4]')");
echo $a;
// // Close the database connections
// $source_db->close();
// $destination_db->close();

?>