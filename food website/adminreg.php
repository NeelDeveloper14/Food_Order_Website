<?php


    
$con=mysqli_connect("localhost","root","","admin");
   

    $u=$_POST["aid"];
    $e=$_POST["aemail"];
    $p=$_POST["apass"];
    $n=$_POST["amn"];
    
    
    $qry=mysqli_query($con,"insert into details (id , email,mobile_no,pass) values ('".$u."','".$e."','".$n."','".$p."')");
    $ans=mysqli_affected_rows($con);
    if($ans==1)
    {
        echo "<script>location.href='adminlogin.html'</script>";

    }
?>
