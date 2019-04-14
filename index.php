<!DOCTYPE html>
<html>
<title>PEINTIO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="peintio.css">

<body>

    <!-- Navbar (sit on top) -->
    <?php
    include 'nav.php';
    ?>
    <?php
    if(isset($_SESSION['created_user'])){
    echo "<script>";
    echo "alert('".$_SESSION['created_user']."');";
    echo "</script>";
    unset($_SESSION['created_user']);
    }
    if(isset($_SESSION['message'])){
    echo "<script>";
    echo "alert('".$_SESSION['message']."');";
    echo "</script>";
    unset($_SESSION['message']);
    }
    if(isset($_SESSION['error'])){
    echo "<script>";
    echo "alert('".$_SESSION['error']."');";
    echo "</script>";
    }
    ?>


<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xxlarge w3-wide w3-animate-opacity">PEINTIO</span>
  </div>
</div>

<!-- Container (About Section) -->
<div id='about'>
        <br><br>
    </div>
    <?php
       include 'about_us.php';
   ?>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
  </div>
</div>



<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">PORTFOLIO</h3>
  <p class="w3-center"><em>Here are some the top rated paintings!<br> Click on the images to make them bigger</em></p><br>

<!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="images/1.jpg" style="width:100%; height:200px" onclick="onClick(this)" class="w3-hover-opacity" alt="Lorem ipsum">&nbsp
    </div>

    <div class="w3-col m3">
      <img src="images/2.jpg" style="width:100%; height:200px" onclick="onClick(this)" class="w3-hover-opacity" alt="Lorem ipsum">&nbsp
    </div>

    <div class="w3-col m3">
      <img src="images/3.jpg" style="width:100%; height:200px" onclick="onClick(this)" class="w3-hover-opacity" alt="Lorem ipsum">&nbsp
    </div>

    <div class="w3-col m3">
      <img src="images/4.jpg" style="width:100%; height:200px" onclick="onClick(this)" class="w3-hover-opacity" alt="Lorem ipsum">&nbsp
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="images/5.jpg" style="width:100%; height:200px" onclick="onClick(this)" class="w3-hover-opacity" alt="Lorem ipsum">&nbsp
    </div>

    <div class="w3-col m3">
      <img src="images/6.jpg" style="width:100%; height:200px" onclick="onClick(this)" class="w3-hover-opacity" alt="Lorem ipsum">&nbsp
    </div>

    <div class="w3-col m3">
      <img src="images/7.jpg" style="width:100%; height:200px" onclick="onClick(this)" class="w3-hover-opacity" alt="Lorem ipsum">&nbsp
    </div>

    <div class="w3-col m3">
      <img src="images/8.jpg" style="width:100%; height:200px" onclick="onClick(this)" class="w3-hover-opacity" alt="Lorem ipsum">&nbsp
    </div>
    <a href="all_paints.php" class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</a>
  </div>
</div>



<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id='contact'>
        <br><br>
    </div>
    <?php
       include 'contact_us.php';
   ?>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>&nbsp
    <i class="fa fa-instagram w3-hover-opacity"></i>&nbsp
    <i class="fa fa-snapchat w3-hover-opacity"></i>&nbsp
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>&nbsp
    <i class="fa fa-twitter w3-hover-opacity"></i>&nbsp
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>

<!-- start-smooth-scrolling -->
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});

<!-- //end-smooth-scrolling -->

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
