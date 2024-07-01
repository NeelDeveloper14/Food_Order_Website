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
   
    
    echo "<tr><td> ID:.$ans[0].</td><td class='imageees'><img src=".$ans[1]." alt=''></td><td>NAME:.$ans[2]. </td><td>PRICE:".$ans[3]."</td><td> TYPE:.$ans[4]. </td><td>
    <div class='group button-group'>
    <a  href='edit.php'>  <button  >Edit Data</button></a>
    </div></td><td>
    <div class='group button-group'>
    <a  href='edit.php'>  <button  >Delete Data</button></a>
    </div>
    </td></tr>";

}

?>
</table>
<!-- </section> -->



















</body>
</html>
