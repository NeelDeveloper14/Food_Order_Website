<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <title>Complete Responsive Food / Restaurant Website Design Tutorial</title> -->
<!--  -->
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!--  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<!--  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
<!--  -->
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<!--  -->
<!-- </head> -->
<body>
<!--  -->
<section class="food" id="food">

   <div class="heading">  
      <span>popular dishes</span>
      <h3>our delicious food</h3>
   </div>

</section>

<!--  -->
    <!-- data from tabel to preview images -->
    <table style="border:80px;" >
     <?php

$con=mysqli_connect("localhost","root","","food1");
//  mysql_select_db("food1");
$sel=mysqli_query($con,"select * from item");

while($ans=mysqli_fetch_array($sel))
{
   
    
    echo "<form action='edit.php' method='post' ><tr><td> ID:.$ans[0].</td><input type='hidden' value='".$ans[0]."' name='id' /><td class='imageees'><img src=".$ans[1]." alt=''></td><td>NAME:.$ans[2]. </td><td>PRICE:".$ans[3]."</td><td> TYPE:.$ans[4]. </td><td>
    <div class='group button-group'>
    <input type='submit' value='edit' >
    </div></td><td></form>
    <form action='edit.php' method='post' ><div class='group button-group'>
    <input type='hidden' value='".$ans[0]."' name='id' />
    <input type='hidden' value='delete' name='delete' />
    <input type='submit'  value='delete' >
    </div>
    </td></tr></form>";
    
}

?>
</table>
<!-- </section> -->



















</body>
</html>
