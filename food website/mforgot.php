<?php


    
$con=mysqli_connect("localhost","root","","user");
   

    $u=$_GET["fmn"];
    $e=$_GET["npass"];
    $p=$_GET["rpass"];
    if($e==$p)
    {
    $Update = "UPDATE `detail` SET `upass` = '".$e."' WHERE umobno='".$u."';";
    
    $qry=mysqli_query($con,$Update);
    if(isset($qry))
    {
        
        echo "<script >alert('successful'); location.href='index.html' </script>";
    }
    else{
        echo "smtg wrong";
    }

    }
    else{
        echo "pass not same";
        echo "<script> alert('password not same');   location.href='forgot.php'</script>";
    }
    