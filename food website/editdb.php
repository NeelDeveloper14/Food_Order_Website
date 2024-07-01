<?php


    
$con=mysqli_connect("localhost","root","","food1");
   
    $id=$_POST["updateid"];
    $name=$_POST["updatename"];
    $price=$_POST["updateprice"];
    $type=$_POST["updatetype"];
    $img="images/".$_POST["updateimg"];
    $qry=mysqli_query($con,"UPDATE item SET img='$img' , name='$name' , price='$price' , type='$type' WHERE id='$id'");
    $ans=mysqli_affected_rows($con);
    if($ans==1)
    {
        echo "<script> alert('success');location.href='edit.php'</script>";

    }
?>