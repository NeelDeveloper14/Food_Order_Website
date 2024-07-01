<?php
    session_start();
  
    if(isset($_SESSION['lemail']))
    {
        ?>    
      
       
  
   
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Food / Restaurant Website Design Tutorial</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<script src="jquery.js">
</script>
</head>
<body>
   
<!-- header section starts     -->

<section class="header">

   <a href="#" class="logo"> <i class="fas fa-utensils"></i> food. </a>

   <nav class="navbar">
      <a href="#home">home</a> &nbsp
      <a href="#about">about</a> &nbsp
      <a href="#food">food</a> &nbsp
      <a href="#gallery">gallery</a>  &nbsp
      <a href="#menu">menu</a> &nbsp
      <a href="#order">order</a> &nbsp
       <!-- <input type="text" placeholder="Search....." class="form-control" id="inp">
      <button type="button" class="btn btn-dark" id="search" style="z-index:0;">Search</button> &nbsp -->
      <a href="#cart">cart
        <span> <i class="fas fa-shopping-cart fa-2x ml-md-5"></i></span> &nbsp &nbsp &nbsp
         <span class="badge badge-success mt-0 align-self-start" id="cart_item_count" style="margin-left: -25px;margin-top: -5px;">0</span>
               </a> &nbsp
         
         
         <a href="#blogs">blogs</a> &nbsp
         <a href="logout.php">logout</a>
        
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends    -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat;">
            <div class="content">
               <span>outstanding food</span>
               <h3>delicious cooking</h3>
               <a href="#food" class="btn">get started</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
            <div class="content">
               <span>outstanding food</span>
               <h3>morning moment</h3>
               <a href="#food" class="btn">get started</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
            <div class="content">
               <span>outstanding food</span>
               <h3>authentic kitchen</h3>
               <a href="#food" class="btn">get started</a>
            </div>
         </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="image">
      <img src="images/about-img.png" alt="">
   </div>

   <div class="content">
      <h3 class="title">welcome to our restaurant</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi optio at, saepe accusamus dolorum, quos eos nesciunt amet exercitationem illum quis nostrum, repellat quaerat eum debitis fugit alias magnam omnis!</p>
      <a href="#" class="btn">read more</a>
      <div class="icons-container">
         <div class="icons">
            <img src="images/about-icon-1.png" alt="">
            <h3>quality food</h3>
         </div>
         <div class="icons">
            <img src="images/about-icon-2.png" alt="">
            <h3>food & drinks</h3>
         </div>
         <div class="icons">
            <img src="images/about-icon-3.png" alt="">
            <h3>expert chefs</h3>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- food section starts  -->

<section class="food" id="food">

   <div class="heading">  
      <span>popular dishes</span>
      <h3>our delicious food</h3>
   </div>

   <div class="swiper food-slider">

      <div class="swiper-wrapper">
         <!-- data comeing from database -->
 <?php

    $con=mysqli_connect("localhost","root","","food1");
   //  mysql_select_db("food1");
    $sel=mysqli_query($con,"select * from item");
  
    while($ans=mysqli_fetch_array($sel))
    {
      echo " <div class='swiper-slide slide' data-name=".$ans[0].">

      <img src=".$ans[1]." alt=''>
      <h3>".$ans[2]."</h3>
      <div class='price'>₹".$ans[3]."
      
      </div>
      <input type=hidden name='id' value='".$ans[0]."' />
      <input type=hidden name='img' value='".$ans[1]."' />
      <input type=hidden name='name' value='".$ans[2]."' />
      <input type=hidden name='price' value='".$ans[3]."' />
      <input type=hidden name='type' value='".$ans[4]."' />
       <div class='stars'>
       <i class='fas fa-star'></i>
       <i class='fas fa-star'></i>
       <i class='fas fa-star'></i>
       <i class='fas fa-star'></i>
       <i class='fas fa-star'></i>
       </div>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, hic!</p>
       <button value='".$ans['0']."' onClick='t(this.value)' class='btn' >Add</button>;
 
      
   </div>";

    }

?>
         
         <!-- <div class="swiper-slide slide" data-name="food-1">
            <img src="images/food-img-1.png" alt="">
            <h3>delicious food</h3>
            <div class="price">$49.99</div>
         </div> -->
<!-- 
         <div class="swiper-slide slide" data-name="food-2">
            <img src="images/food-img-2.png" alt="">
            <h3>delicious food</h3>
            <div class="price">$49.99</div>
         </div>

         <div class="swiper-slide slide" data-name="food-3">
            <img src="images/food-img-3.png" alt="">
            <h3>delicious food</h3>
            <div class="price">$49.99</div>
         </div>

         <div class="swiper-slide slide" data-name="food-4">
            <img src="images/food-img-4.png" alt="">
            <h3>delicious food</h3>
            <div class="price">$49.99</div>
         </div>

         <div class="swiper-slide slide" data-name="food-5">
            <img src="images/food-img-5.png" alt="">
            <h3>delicious food</h3>
            <div class="price">$49.99</div> -->
         <!-- </div> -->

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- food section ends -->

<!-- food preview section starts  -->
<!-- 
<section class="food-preview-container">

   <div id="close-preview" class="fas fa-times"></div> -->
    <!-- data from tabel to preview images -->
    <?php

// $con=mysqli_connect("localhost","root","","food1");
// //  mysql_select_db("food1");
// $sel=mysqli_query($con,"select * from item");

// while($ans=mysqli_fetch_array($sel))
// {
//    echo " <div class='food-preview' data-target=".$ans[0].">
//    <img src=".$ans[1]." alt='' name='img' >
//    <h3>".$ans[2]."</h3>
//   <input type=hidden name='id' value='".$ans[0]."' />
//   <input type=hidden name='img' value='".$ans[1]."' />
//   <input type=hidden name='name' value='".$ans[2]."' />
//   <input type=hidden name='price' value='".$ans[3]."' />
//   <input type=hidden name='type' value='".$ans[4]."' />
//    <div class='stars'>
//    <i class='fas fa-star'></i>
//    <i class='fas fa-star'></i>
//    <i class='fas fa-star'></i>
//    <i class='fas fa-star'></i>
//    <i class='fas fa-star'></i>
//    </div>
//    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, hic!</p>
//    <div class='price'>".$ans[3]."</div>

//    <button value='".$ans['0']."' onClick='t(this.value)' class='btn' >Add</button>;
//    </div>";
// }

// ?>
<script>
function t(id) {
   // Create a new XMLHttpRequest object
   $.ajax({
      method:"POST",
      url:"transfer.php",
      data:{id:id},
      success:function(data){
          
            swal("ADDED!", "your food is added to cart!", "success");
          
         
      }
  })
   // alert(id);
}
</script>
<?php

   ?>
</section>
   <!-- <div class="food-preview" data-target="food-2">
      <img src="images/food-img-2.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, hic!</p>
      <div class="price">$49.99</div>
      <a href="#" class="btn">buy now</a>
   </div>

   <div class="food-preview" data-target="food-3">
      <img src="images/food-img-3.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, hic!</p>
      <div class="price">$49.99</div>
      <a href="#" class="btn">buy now</a>
   </div>

   <div class="food-preview" data-target="food-4">
      <img src="images/food-img-4.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, hic!</p>
      <div class="price">$49.99</div>
      <a href="#" class="btn">buy now</a>
   </div>

   <div class="food-preview" data-target="food-5">
      <img src="images/food-img-5.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, hic!</p>
      <div class="price">$49.99</div>
      <a href="#" class="btn">buy now</a>
   </div> -->

<!-- </section> -->

<!-- food preview section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

   <div class="heading">
      <span>our gallery</span>
      <h3>our untold stories</h3>
   </div>

   <div class="gallery-container">
<!-- bringing img from db -->
<?php

$con=mysqli_connect("localhost","root","","food1");
//  mysql_select_db("food1");
$sel=mysqli_query($con,"select * from item");

while($ans=mysqli_fetch_array($sel))
{
    echo "  <a href=".$ans[1]." class='box'>
         <img src=".$ans[1]." alt=''>
         
         <div class='icon'> <i class='fas fa-plus'></i> </div>
      </a>";
}
?>

      <!-- <a href="images/food-galler-img-2.jpg" class="box">
         <img src="images/food-galler-img-2.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>

      <a href="images/food-galler-img-3.jpg" class="box">
         <img src="images/food-galler-img-3.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>

      <a href="images/food-galler-img-4.jpg" class="box">
         <img src="images/food-galler-img-4.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>
      
      <a href="images/food-galler-img-5.jpg" class="box">
         <img src="images/food-galler-img-5.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>

      <a href="images/food-galler-img-6.jpg" class="box">
         <img src="images/food-galler-img-6.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a> -->

   </div>

</section>

<!-- gallery section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

   <div class="heading">
      <span>our menu</span>
      <h3>our popular dishes</h3>
   </div>

   <div class="swiper menu-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <h3 class="title">breakfast</h3>
            <div class="box-container">

               <!-- breakfasts from the breakfast type in db  -->
               <?php
            

               $con=mysqli_connect("localhost","root","","food1");
               //  mysql_select_db("food1");
               $sel=mysqli_query($con,"select * from item where type='breakfast'");

               while($ans=mysqli_fetch_array($sel))
               {
               echo " 
               <div class='box'>

                  <div class='info'>
                     <h3>morning breakfast</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class='price'>₹".$ans[3]." 
                &nbsp
                <button value='".$ans['0']."' onClick='t(this.value)' class='btn' > <i class='fas fa-shopping-cart fa-2x ml-md-5'></i></button>
                 </div>
               </div>";
               }
               ?>
               <!-- <div class="box">
                  <div class="info">
                     <h3>morning breakfast</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div> -->
               <!-- <div class="box">
                  <div class="info">
                     <h3>morning breakfast</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>morning breakfast</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>morning breakfast</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>morning breakfast</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div> -->
            </div>
         </div>

         <div class="swiper-slide slide">
            <h3 class="title">lunch</h3>
            <div class="box-container">
                         <!-- lunch from the lunch type in db  -->
                         <?php
            

            $con=mysqli_connect("localhost","root","","food1");
            //  mysql_select_db("food1");
            $sel=mysqli_query($con,"select * from item where type='lunch'");

            while($ans=mysqli_fetch_array($sel))
            {
            echo " 
               <div class='box'>
                  <div class='info'>
                     <h3>delicious lunch</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class='price'>₹".$ans[3]."
                  <button value='".$ans['0']."' onClick='t(this.value)' class='btn' > <i class='fas fa-shopping-cart fa-2x ml-md-5'></i></button>
                  </div>
               </div>";
            }
            ?>
               <!-- <div class="box">
                  <div class="info">
                     <h3>delicious lunch</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>delicious lunch</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>delicious lunch</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div> -->
            </div>
         </div>

         <div class="swiper-slide slide">
            <h3 class="title">dinner</h3>
            <div class="box-container">
                 <!-- dinner from the dinner type in db  -->
                 <?php
            

            $con=mysqli_connect("localhost","root","","food1");
            //  mysql_select_db("food1");
            $sel=mysqli_query($con,"select * from item where type='dinner'");

            while($ans=mysqli_fetch_array($sel))
            {
            echo " 
               <div class='box'>
                  <div class='info'>
                     <h3>delicious dinner</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class='price'>₹".$ans[3]."
                  <button value='".$ans['0']."' onClick='t(this.value)' class='btn' > <i class='fas fa-shopping-cart fa-2x ml-md-5'></i></button>
                  </div>
               </div>";
            }
            ?>
               <!-- <div class="box">
                  <div class="info">
                     <h3>delicious dinner</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>delicious dinner</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>delicious dinner</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>delicious dinner</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div> -->
            </div>
         </div>

         <div class="swiper-slide slide">
            <h3 class="title">drinks</h3>
            <div class="box-container">
                           <!-- lunch from the lunch type in db  -->
                           <?php
            

            $con=mysqli_connect("localhost","root","","food1");
            //  mysql_select_db("food1");
            $sel=mysqli_query($con,"select * from item where type='drinks'");

            while($ans=mysqli_fetch_array($sel))
            {
            echo " 
               <div class='box'>
                  <div class='info'>
                     <h3>cold drinks</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class='price'>₹".$ans[3]."
                  <button value='".$ans['0']."' onClick='t(this.value)' class='btn' > <i class='fas fa-shopping-cart fa-2x ml-md-5'></i></button>
                  </div>
                  
               </div>";
            }
            ?>
               <!-- <div class="box">
                  <div class="info">
                     <h3>cold drinks</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div> -->
               <!-- <div class="box">
                  <div class="info">
                     <h3>cold drinks</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>cold drinks</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>cold drinks</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>cold drinks</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>cold drinks</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div> -->
            </div>
         </div>

         <div class="swiper-slide slide">
            <h3 class="title">dessert</h3>
            <div class="box-container">
                           <!-- dessert from the dessert type in db  -->
                           <?php
            

            $con=mysqli_connect("localhost","root","","food1");
            //  mysql_select_db("food1");
            $sel=mysqli_query($con,"select * from item where type='dessert'");

            while($ans=mysqli_fetch_array($sel))
            {
            echo " 
               <div class='box'>
                  <div class='info'>
                     <h3>dessert</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class='price'>₹".$ans[3]."
                  <button value='".$ans['0']."' onClick='t(this.value)' class='btn' > <i class='fas fa-shopping-cart fa-2x ml-md-5'></i></button>
                  </div>
                  
               </div>";
            }
            ?>
               <!-- <div class="box">
                  <div class="info">
                     <h3>sweet dessets</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>sweet dessets</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>sweet dessets</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>sweet dessets</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
            </div> -->
         </div>

      </div>

      

   </div>
   <div class="swiper-pagination"></div>
</section>

<!-- menu section ends -->





<!-- cart section starts  -->

<section class="menu" id="cart">
<form action="credit/card.php"  method="post" >
   <div class="heading">
      <span>CART</span>
      <h3>Your selected dishes</h3>
   </div>
   
   <div class="swiper menu-slider">
      
      <div class="swiper-wrapper">
         
         <div class="swiper-slide slide">
            <table>
               <tr><td>
                  <h3 class="title">items</h3></td><td>
                     <h3 class="title">price</h3></td></tr>
                     <div class="box-container">
                        
                        <!--items from cart in db  -->
                        <?php
                        $t=0;
            

               $con=mysqli_connect("localhost","root","","cart");
               //  mysql_select_db("food1");
               $sel=mysqli_query($con,"select * from item  ");

               while($ans=mysqli_fetch_array($sel))
               {
               echo " <tr><td  align='center'>
               <div class='food-preview' data-target=".$ans[0].">
       <img src=".$ans[1]." alt=''>
      <h3>".$ans[2]."</h3>
      </td><td align='center'>
       <div class='price'>".$ans[3]."</td><td>
       <button value='".$ans['0']."' onClick='d(this.value)' class='btn' > <i class='fa fa-minus' aria-hidden='true'></i></button></div>
                 

      </td></tr>";
      
      
      $t=$t+$ans[3];
  echo "</div>";
               }
               ?>
              <tr> <td><h3 class='title'>totals</h3></td><td align="center"><h3 class='title'><?php echo $t?></h3>
      </td</tr>
               </table>
             
               <button type=submit class='btn' name="total" value="$t">Pay</button>
            </form>
   ?>
               <script>
function d(id) {
   // Create a new XMLHttpRequest object
   $.ajax({
      method:"POST",
      url:"deltransfer.php",
      data:{id:id},
      success:function(data){
         
            swal("DELETED!", "your food is removed from cart!", "success");
          
         
      }
  })
  location.reload(); 
  // alert(id);
}



</script>
      </section>
<!-- cart section ends -->

<!-- order section starts  -->

<section class="order" id="order">

   <div class="heading">
      <span>order now</span>
      <h3>fast home delivery</h3>
   </div>

   <form action="">
      <div class="box-container">
         <div class="box">
            <div class="inputBox">
               <span>full name</span>
               <input type="text" placeholder="enter your name">
            </div>
            <div class="inputBox">
               <span>food name</span>
               <input type="text" placeholder="food you want">
            </div>
            <div class="inputBox">
               <span>order details</span>
               <input type="text" placeholder="specifics with food">
            </div>
            <div class="inputBox">
               <span>your address</span>
               <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
            </div>
         </div>
         <div class="box">
            <div class="inputBox">
               <span>number</span>
               <input type="number" placeholder="enter your number">
            </div>
            <div class="inputBox">
               <span>how much</span>
               <input type="number" placeholder="how many you want">
            </div>
            <div class="inputBox">
               <span>when you want</span>
               <input type="datetime-local">
            </div>
            <div class="inputBox">
               <span>our address</span>
               <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60307.59083109428!2d72.840725!3d19.141651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1642222128240!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
            </div>
         </div>
      </div>
      <input type="submit" value="order now" class="btn">
   </form>
   
</section>

<!-- order section ends -->





















<!-- blogs section starts  -->

<section class="blogs" id="blogs">

   <div class="heading">
      <span>our blogs</span>
      <h3>our latest posts</h3>
   </div>

   <div class="swiper blogs-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-img-1.jpg" alt="">
               <span>burger</span>
            </div>
            <div class="content">
               <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by admin </a>
               </div>
               <a href="#" class="title">blog title goes here</a>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, reprehenderit!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-img-2.jpg" alt="">
               <span>sandwich</span>
            </div>
            <div class="content">
               <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by admin </a>
               </div>
               <a href="#" class="title">blog title goes here</a>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, reprehenderit!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-img-3.jpg" alt="">
               <span>chicken</span>
            </div>
            <div class="content">
               <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by admin </a>
               </div>
               <a href="#" class="title">blog title goes here</a>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, reprehenderit!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-img-4.jpg" alt="">
               <span>ice-cream</span>
            </div>
            <div class="content">
               <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by admin </a>
               </div>
               <a href="#" class="title">blog title goes here</a>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, reprehenderit!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-img-5.jpg" alt="">
               <span>pizza</span>
            </div>
            <div class="content">
               <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by admin </a>
               </div>
               <a href="#" class="title">blog title goes here</a>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, reprehenderit!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-img-6.jpg" alt="">
               <span>coffee</span>
            </div>
            <div class="content">
               <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by admin </a>
               </div>
               <a href="#" class="title">blog title goes here</a>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, reprehenderit!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

      </div>

      
   </div>
   <div class="swiper-pagination"></div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>07:00am to 10:00pm</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>1234567890</p>
         <p>1111111111</p>
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>abc@gmail.com</p>
         <p>aaa@gmail.com</p>
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
         <h3>address</h3>
         <p>mumbai, india</p>
      </div>

   </div>
<!-- 
   <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
   </div> -->

   <div class="credit"> created by <span>neel</span> |  </div>

</section>

<!-- footer section ends  -->










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>
   lightGallery(document.querySelector('.gallery .gallery-container'));
</script>

</body>
</html>



<!-- sesssion part -->

<?php

               }
            
            else
            {
             echo "<script>location.href='index.html'</script>";
            }
         ?>