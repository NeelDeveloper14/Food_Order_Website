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
    <form action="editdb.php" method="post">
     <?php
//   echo "<script> alert('".$_POST['delete']."');</script>";   
if(isset($_POST['id'])){
    $a=$_POST['id'];
    setcookie("id", $a);
}else{
    $a=$_COOKIE['id'];
    echo "<script> alert('success');location.href='show.php'</script>";
}
// $d=$_POST['delete'];
$con=mysqli_connect("localhost","root","","food1");
//  mysql_select_db("food1");
$sel=mysqli_query($con,"select * from item where id='".$a."'");
if(isset($_POST['delete']))
{
    $a=$_POST['id'];
    mysqli_query($con,"delete  from item where id='".$a."'");
    echo "<script> alert('deleted');location.href='show.php'</script>";
}
while($ans=mysqli_fetch_array($sel))
{
   
    
    echo "<tr><td> ID:.$ans[0].</td>
    <input type='hidden' value='".$ans[0]."' name=updateid />
    <td class='imageees'><img src=".$ans[1]." alt='' value='".$ans[1]."'></td>
    
    
    <td><input type='file' name='updateimg' id='fileToUpload' required></td>
    
    
    <td>NAME:.$ans[2]. </td>
    <td><input type='text' name='updatename' value='".$ans[2]."'</td>
    <td>PRICE:".$ans[3]."</td>
    <td><input type='number' name='updateprice' value='".$ans[3]."'</td>
    <td> TYPE:.$ans[4]. </td>
    <td> <select name='updatetype'>
    <option value='".$ans[4]."'>$ans[4]</option>
    <option value='Breakfast'>Breakfast</option>
    <option value='Lunch'>Lunch</option>
    <option value='Dinner'>Dinner</option>
    <option value='Desserts'>Desserts</option>
    <option value='Cold Drinks'>Cold Drinks</option>
</select></td>
   <td>
      <button id='".$ans[0]."' type='submit'>Edit Data</button>
   </td>
  </tr>";

}

?>
</table>
</form>
<!-- </section> -->



















</body>
</html>
