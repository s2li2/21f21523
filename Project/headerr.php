<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
         <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
         <a href="https://twitter.com/" class="fab fa-twitter"></a>
         <a href="https://www.instagram.com" class="fab fa-instagram"></a>
         <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
         </div>
         <p> New <a href="loginn.php">Login</a> | <a href="register.php">Register</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="homee.php" class="logo">Beech.</a>

         <nav class="navbar">
            <a href="homee.php">Home</a>
            <a href="aboutt.php">About</a>
            <a href="shopp.php">Shop</a>
            <a href="contactt.php">Contact</a>
            <a href="orderss.php">Orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="searchh_pagee.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cartt` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cartt.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>User name : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logoutt.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>