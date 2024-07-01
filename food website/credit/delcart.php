<?php 



$destination_db=mysqli_connect("localhost", "root", "", "cart");
$a=$destination_db->query("DELETE FROM item ");
echo $a;
echo "<script>location.href='../test.php'</script>";
?>