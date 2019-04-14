<!DOCTYPE html>

 <?php

         
            $con = mysqli_connect("localhost", "root", "", "peintio") or die(mysqli_error($con));
            $sql = "SELECT ROWNUM as RANK, category, uid, pid
                    FROM (SELECT ravg, category, uid, pid
                    FROM painting
                    ORDER BY ravg)
                    WHERE ROWNUM<=8";
            $result = mysqli_query($con, $sql) or die(mysqli_error($con));
            $num= mysqli_num_rows($result);
            ?> 

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">PORTFOLIO</h3>
  <p class="w3-center"><em>Here are some the top rated paintings!<br> Click on the images to make them bigger</em></p><br>

  <div class="w3-row-padding w3-center">
  <?php
    while($row = mysqli_fetch_array($result)) {
        echo '<div class="w3-col m3">';
        echo "<img src='images/",$row['imgname']."' style='width:100%; height:200px' onclick='onClick(this)' class='w3-hover-opacity' alt='Lorem ipsum'>&nbsp";
        echo '</div>';
    }
  ?>
  </div>
  
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
    <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
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