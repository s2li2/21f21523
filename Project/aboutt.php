<!-- from BRANCH-1 -->
<?php

include 'configg.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:loginn.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

  <!-- awesome fonts cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Link to the custom CSS file is here -->
<link rel="stylesheet" href="stylee.css">

</head>
<body>
   
<?php include 'headerr.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="homee.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/aboutt-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At our wood selling company, we strive to provide the finest quality products and exceptional service that sets us apart from the rest. We understand that there are numerous options available in the market, and we appreciate your decision to select us as your preferred supplier.</p>
         <p>So, why did you choose us? We offer top-quality wood products, diverse options, sustainable practices, expert guidance, and customer satisfaction.</p>
         <a href="contactt.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Customers reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Customers reviews-1.png" alt="">
         <p>The website made finding and purchasing the perfect wood for my project a breeze - highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ethan Davis</h3>
      </div>

      <div class="box">
         <img src="images/Customers reviews-2.png" alt="">
         <p>Smooth and seamless transaction, the website provided all the information I needed to make an informed choice.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sophia Johnson</h3>
      </div>

      <div class="box">
         <img src="images/Customers reviews-3.png" alt="">
         <p>Great variety of wood options available on the website, it saved me time and effort in finding what I needed.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Benjamin Martinez</h3>
      </div>

      <div class="box">
         <img src="images/Customers reviews-4.png" alt="">
         <p>The website's commitment to sustainable practices aligned with my values, making it easy to buy from them.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emily Thompson</h3>
      </div>

      <div class="box">
         <img src="images/Customers reviews-5.png" alt="">
         <p>The expert guidance and prompt customer support I received through the website ensured a successful and satisfying purchase.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Liam Anderson</h3>
      </div>

      <div class="box">
         <img src="images/Customers reviews-6.png" alt="">
         <p>Using the website to purchase wood was a pleasure - the user-friendly interface and secure checkout process gave me peace of mind.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ava Wilson</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">GREAT WOOD CARVER</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Woodcarver-1.jpg" alt="">
         <div class="share">
         <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
         </div>
         <h3>Grinling Gibbons</h3>
      </div>

      <div class="box">
         <img src="images/Woodcarver-2.jpg" alt="">
         <div class="share">
         <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
         </div>
         <h3>Ernst Barlach</h3>
      </div>

      <div class="box">
         <img src="images/Woodcarver-3.jpg" alt="">
         <div class="share">
         <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
         </div>
         <h3>Ivan Tsarevich</h3>
      </div>

      <div class="box">
         <img src="images/Woodcarver-4.jpg" alt="">
         <div class="share">
         <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
         </div>
         <h3>David Esterly</h3>
      </div>

      <div class="box">
         <img src="images/Woodcarver-5.jpg" alt="">
         <div class="share">
         <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
         </div>
         <h3>Mary May</h3>
      </div>

      <div class="box">
         <img src="images/Woodcarver-6.jpg" alt="">
         <div class="share">
         <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
         </div>
         <h3>Elmer Crowell</h3>
      </div>

   </div>

</section>







<?php include 'foterr.php'; ?>


<!-- each JS file link  -->
<script src="js/scriptt.js"></script>

</body>
</html>