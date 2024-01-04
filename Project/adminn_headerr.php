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

   <div class="flex">

      <a href="adminn_pagee.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="adminn_pagee.php">Home</a>
         <a href="adminn_productss.php">Products</a>
         <a href="adminn_orderss.php">Orders</a>
         <a href="adminn_userss.php">Users</a>
         <a href="adminn_contactss.php">Messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>
   

      <div class="account-box">
         <p>Username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>Email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logoutt.php" class="delete-btn">logout</a>
         <div>New <a href="loginn.php">Login</a> 
         | <a href="register.php">Register</a></div>
      </div>

   </div>

</header>