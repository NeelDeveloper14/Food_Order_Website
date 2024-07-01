<?php 
// echo "<script>alert('dgfhjhkjl;l')</script>";
$source_db=mysqli_connect("localhost", "root", "", "cart");

// Retrieve the record ID from the AJAX request


// Fetch the record from the source database
$result = mysqli_query($source_db,"SELECT * FROM item");
// $row = $result->fetch_assoc();
$destination_db=mysqli_connect("localhost", "root", "", "record");
while($ans=mysqli_fetch_array($result))
{
// // Insert the record into the destination database
$a=mysqli_query($destination_db,"INSERT INTO item VALUES ('','$ans[1]','$ans[2]',$ans[3],'$ans[4]',NOW())");

}
// // Close the database connections
// $source_db->close();
// $destination_db->close();
echo "<script>location.href='delcart.php'</script>";
?>
