<?php
    session_start();
  
    if(isset($_SESSION['aemail']))
    {
       
        
        echo "<script>location.href='record.php'</script>";
       
    }
    else
    {
        $u = $_GET['aemail'];
        $p = $_GET['apass'];
        
        $con=mysqli_connect("localhost","root","","admin");

        $sql = "select * from details where email='".$u."' && pass='".$p."' ";

        $r = mysqli_query($con,$sql);

        $data = mysqli_fetch_array($r);

       
        if($data)
        {

            $_SESSION['aemail'] = $u;

            echo "<script>location.href='adminlogin.php'</script>";
        }
        else
        {
            echo "<script>alert('username or password is wrong');</script>";
           

            echo "<script>location.href='admin.html'</script>";

        }
    }
?>
<style>
    html{
        background-color:lightblue;
    }
 
    .h1{
        margin-left:45%;
        font-size:40px;
    }

</style>