<?php
    session_start();
  
    if(isset($_SESSION['lemail']))
    {
       
        
        echo "<script>location.href='test.php'</script>";
       
    }
    else
    {
        $u = $_GET['lemail'];
        $p = $_GET['lpass'];
        
        $con=mysqli_connect("localhost","root","","user");

        $sql = "select * from detail where uemail='".$u."' && upass='".$p."' ";

        $r = mysqli_query($con,$sql);

        $data = mysqli_fetch_array($r);

       
        if($data)
        {

            $_SESSION['lemail'] = $u;

            echo "<script>location.href='login.php'</script>";
        }
        else
        {
            echo "<script>alert('username or password is wrong');</script>";
           

            echo "<script>location.href='index.html'</script>";

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