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

   <section class="flex">

      <a href="home.php" class="logo">Bid<span>.COM</span></a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="#">Category</a>
         <a href="#">Payement</a>
         <a href="#">Cart List</a>
         <a href="contact.php">Contact Us</a>
         <a href="#">About Us</a>
         <a href="#">Feedback</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="#"><i class='fas fa-search' style='font-size:15px;color:#130a30'></i></a>
         <a href="#"><i class="fa fa-plus-circle" style='font-size:15px;color:#130a30'></i><span></span></a>
         <a href="#"><i class="fa fa-cart-arrow-down" style='font-size:15px;color:#2e0400'></i><span></span></a>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <a href="#" class="btn">update profile</a>
         <div class="flex-btn">
            <a href="#" class="option-btn">register</a>
            <a href="#" class="option-btn">login</a>
         </div>
         <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
         <p>please login or register first!</p>
         <div class="flex-btn">
            <a href="#" class="option-btn">register</a>
            <a href="#" class="option-btn">login</a>
         </div>   
      </div>

   </section>

</header>