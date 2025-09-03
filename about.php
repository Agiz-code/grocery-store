<?php

@include 'config.php';

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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img.png" alt="">
         <h3>why choose us?</h3>
         <p><h1>At Agizstore, we believe grocery shopping should be simple, affordable, and reliable. We bring the freshest fruits, vegetables, and daily essentials straight to your doorstep, saving you time and effort. With quality you can trust, competitive prices, and seamless service, we make sure your family always gets the best. Shopping with us means convenience, freshness, and peace of mind—all in one place.</h1></p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/delivery-man.png" alt="">
         <h3>what we provide?</h3>
         <p><h1>Agizstore is your one-stop shop for all your grocery needs. From farm-fresh produce, pantry staples, and dairy products to snacks, beverages, and household essentials—we’ve got it all. Whether it’s weekly shopping or last-minute needs, we ensure fast delivery, premium quality, and unbeatable variety. Whatever your grocery list looks like, Agizstore is here to serve you better, every single day.</h1></p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p><h1>“Fantastic store with a wide variety of products. I especially love their quick delivery and attention to quality. Definitely my go-to grocery shop online.”</h1></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chris Adams</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
          <p><h1>“Agizstore has completely changed the way I shop for groceries. Fresh produce, quick delivery, and great customer service—I couldn’t ask for more!”</h1></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alice</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p><h1>“Always fresh, always reliable! Agizstore gives me peace of mind knowing I’ll get exactly what I ordered, right at my doorstep. Couldn’t be happier!”</h1></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p><h1>“I love how easy it is to order everything I need in one place. The prices are affordable, and the quality is always top-notch. Highly recommend Agizstore!”</h1></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Camelia</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p><h1>“Shopping online has never been this simple. My groceries always arrive on time, neatly packed, and super fresh. Excellent service every time!”</h1></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Theo</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p><h1>“Agizstore makes my weekly shopping stress-free. I can trust them for fresh fruits, vegetables, and even household items. Truly reliable!”</h1></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Yasmine</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>