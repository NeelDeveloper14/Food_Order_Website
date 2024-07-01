<?php


    
$con=mysqli_connect("localhost","root","","food1");
   

    $u="images/".$_POST["imageToUpload"];
    $e=$_POST["name"];
    $p=$_POST["price"];
    $n=$_POST["type"];
    
    
    $qry=mysqli_query($con,"insert into item (img , name,price,type) values ('".$u."','".$e."','".$p."','".$n."')");
    $ans=mysqli_affected_rows($con);
    if($ans==1)
    {
        echo "<script> alert('success');location.href='record.php'</script>";

    }
?>