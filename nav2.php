 <!DOCTYPE html>
<?php
    include 'user_login.php';         
    include 'user_signup_modal.php';
    include 'user_login_modal.php';
    include 'upload_modal.php';
?>


<div class="w3-top">
  <div class="w3-bar w3-white w3-animate-tops w3-card" id="myNavbar2">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
      <a class="dropdown-toggle w3-bar-item w3-button w3-hide-small" data-toggle="dropdown" href="#">GALLERY
            <span class="caret"></span> </a>
        <ul class="dropdown-menu w3-animate-zoom">
            <li><a href="gallery.php?cat='oil'">Oil Paintings</a></li>
            <li><a href="gallery.php?cat='watercolor'">Watercolor Paintings</a></li>
        </ul>
      <a href="index.php" class="w3-bar-item w3-button">HOME</a>
      <a href="index.php #about" class="w3-bar-item w3-button w3-hide-small scroll"><i class="fa fa-user"></i> ABOUT</a>
      <a href="index.php #portfolio" class="w3-bar-item w3-button w3-hide-small scroll"><i class="fa fa-th"></i> PORTFOLIO</a>

      
  
    <a href="index.php #contact" class="w3-bar-item w3-button w3-hide-small scroll"><i class="fa fa-envelope"></i> CONTACT</a>
    <?php if(isset($_SESSION['u_id'])){ ?>
       
    <a href="logout.php" class="w3-bar-item w3-button w3-right w3-hide-small">
            <i class="fa fa-sign-out"></i> Log Out</a>
    <a href="favourites.php" class="w3-bar-item w3-button w3-right w3-hide-small">
             Favourites</a> 
    <a href="#uploadimage" data-toggle="modal" data-target="#uploadimage" class="w3-bar-item w3-button w3-right w3-hide-small">
             Upload</a> 
    <?php } else { ?>
    <a href="#usersignup" class="w3-bar-item w3-button w3-right w3-hide-small" 
           data-link-alt="Sign Up" data-toggle="modal" data-target="#usersignup">
            <i class="fa fa-user"></i> SIGN UP</a>
    <a href="#usersignin" class="w3-bar-item w3-button w3-right w3-hide-small" 
       data-link-alt="Sign in" data-toggle="modal" data-target="#usersignin">
        <i class="fa fa-user"></i> SIGN IN</a>       
    
    <?php } ?>
    <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white">
      <i class="fa fa-search"></i>
    </a>-->
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="index.php #about" class="w3-bar-item w3-button scroll" onclick="toggleFunction()">ABOUT</a>
    <a href="index.php #portfolio" class="w3-bar-item w3-button scroll" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="index.php #contact" class="w3-bar-item w3-button scroll" onclick="toggleFunction()">CONTACT</a>
    <!-- <a href="#" class="w3-bar-item w3-button">SEARCH</a> -->
  </div>
</div>
