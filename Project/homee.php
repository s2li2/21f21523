<?php

include 'configg.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:loginn.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cartt` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cartt`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'products added to the cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- awesome fonts cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   <!-- Link to the custom CSS file is here -->
   <link rel="stylesheet" href="stylee.css">
</head>
<body>
   
<?php include 'headerr.php'; ?>

<section class="home">

   <div class="content">
      <h3>Hand Picked Wood to your door.</h3>
      <p>The best types of wood you can find at "Beech"</p>
      <a href="aboutt.php" class="white-btn">discover more</a>
   </div>

</section>

<section class="products">

   <h1 class="title">Latest products</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `productss` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
               ?>
               <form action="" method="post" class="box">
                <img class="image" src="uploadedd_img/<?php echo $fetch_products['image']; ?>" alt="">
                <div class="name"><?php echo $fetch_products['name']; ?></div>
                <div class="price">OR<?php echo $fetch_products['price']; ?>/-</div>
                <input type="number" min="1" name="product_quantity" value="1" class="qty">
                <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                <input type="submit" value="add to cart" name="add_to_cart" class="btn">
               </form>
                <?php
                   }
                }else{
         echo '<p class="Empty">No products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shopp.php" class="option-btn">Load more</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/aboutt-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>Beech Company is a company specialized in selling different types of wood under
             one roof with the best quality and is brought directly from the tropical forests.</p>
         <a href="aboutt.php" class="btn">read more</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>If you have questions or want to report a problem with 
         any Beech product or service, we can help you with our support team.</p>
      <a href="contactt.php" class="white-btn">contact us</a>
   </div>

</section>





<?php include 'foterr.php'; ?>

<!-- each JS file link  -->
<script src="js/scriptt.js"></script>

</body>
</html>