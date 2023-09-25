<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- Custom css file link -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php';?>

<div class="heading">
   <h3>About Us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="assests/about_us.jpg" alt="">
      </div>
   

      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>We provide a perfect combination of quality and competitive pricing.
            <br>

            Luxury goods like watches need not be expensive and this is the reason why we have decided to establish our company. We are here to offer a perfect combination of quality and competitive pricing. After all, we do believe that each one of us deserves to have that one watch that meets our style and preferences.
         </p>
         <p>Top notch customer service.
            <br>

            Our company would always be here ready to serve you for you are our topmost priority. In addition to that, we have always been known for our strong commitment and dedication to our customers. So, regardless of whether you are shopping with us for the first time or you have already shopped from us a couple of time already, rest assured that you would have a great shopping experience with us.
         </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>
   
   </div>


</section>

<section class="reviews">

   <h1 class="title">Customer Reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>I've purchased two watches from watch shop 1 for myself and 1 for myself. Once purchased the delivery time was was within 2-3 days. The watches are great we've had nothing to complain about, I am going to purchase from them again and highly recommend</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Siddhart Augustine</h3>
      </div>

      <div class="box">
         <p>Great customer service and worry-free transaction. Would definitely recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Sakshi Bhati</h3>
      </div>

      <div class="box">
         <p>prompt delivery.nice packaging.beautiful watch.what more do you need.easy watch adjustment if necessary,no charge.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sijesh Achari</h3>
      </div>

      <div class="box">
         <p>Very pleasant experience. Price was excellent. Watch arrived in perfect condition. WatchShopping answered my email questions rapidly. I will use them again in a future purchase.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Sarthak Jadhav</h3>
      </div>

   </div>

</section>








<?php include 'footer.php'; ?>

<!-- javascript file link -->
<script src="js/index.js"></script>

</body>
</html>