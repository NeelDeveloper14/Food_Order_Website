<?php


    
$con=mysqli_connect("localhost","root","","user");
   

    $u=$_POST["femail"];
    $e=$_POST["npass"];
    $p=$_POST["rpass"];
    if($e==$p)
    {
    $Update = "UPDATE `detail` SET `upass` = '".$e."' WHERE uemail='".$u."';";
    
    $qry=mysqli_query($con,$Update);
    if(isset($qry))
    {
        
        echo "<script >alert('successful'); location.href='index.html'</script>";
    }
    else{
        echo "smtg wrong";
    }

    }
    else{
        echo "pass not same";
        echo "<script> alert('password not same');   location.href='forgot.php'</script>";
    }
    