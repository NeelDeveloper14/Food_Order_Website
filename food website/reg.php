<?php


    
$con=mysqli_connect("localhost","root","","user");
   

    $u=$_POST["uid"];
    $e=$_POST["uemail"];
    $p=$_POST["upass"];
    $n=$_POST["umn"];
    
    
    $qry=mysqli_query($con,"insert into detail (uid , uemail,umobno,upass) values ('".$u."','".$e."','".$n."','".$p."')");
    $ans=mysqli_affected_rows($con);
    if($ans==1)
    {
        echo "<script>location.href='index.html'</script>";

    }
?>
