<?php

include 'configg.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:loginn.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `messagee` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'You sent message already!';
   }else{
      mysqli_query($conn, "INSERT INTO `messagee`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'You sent message successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact</title>

   <!-- awesome fonts cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   <!-- Link to the custom CSS file is here -->
   <link rel="stylesheet" href="stylee.css">
</head>
<body>
   
<?php include 'headerr.php'; ?>

<div class="heading">
   <h3>contact us</h3>
   <p> <a href="homee.php">Home</a> / Contact </p>
</div>

<section class="contact">


   <form action="" method="post">
      <h3>say something!</h3>
      <input type="text" name="name" required placeholder="Enter your name" class="box">
      <input type="email" name="email" required placeholder="Enter your email" class="box">
      <input type="number" name="number" required placeholder="Enter your number" class="box">
      <textarea name="message" class="box" placeholder="Enter your message" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
   </form>


</section>



<?php include 'foterr.php'; ?>

<!-- each JS file link  -->
<script src="js/scriptt.js"></script>

</body>
</html>