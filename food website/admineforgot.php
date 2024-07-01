<?php


    
$con=mysqli_connect("localhost","root","","admin");
   

    $u=$_POST["femail"];
    $e=$_POST["npass"];
    $p=$_POST["rpass"];
    if($e==$p)
    {
    $Update = "UPDATE `details` SET `pass` = '".$e."' WHERE email='".$u."';";
    
    $qry=mysqli_query($con,$Update);
    if(isset($qry))
    {
        
        echo "<script >alert('successful'); location.href='admin.php'</script>";
    }
    else{
        echo "smtg wrong";
    }

    }
    else{
        echo "pass not same";
        echo "<script> alert('password not same');   location.href='adminforgot.php'</script>";
    }
    