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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="peintio.css">
<body>
    
   <?php
    include 'nav2.php';
    $category=$_GET['cat'];
         
            $con = mysqli_connect("localhost", "root", "", "peintio") or die(mysqli_error($con));
            $sql = "SELECT * FROM image natural join painting  where category=".$category;
            $result = mysqli_query($con, $sql) or die(mysqli_error($con));
            $result1 = mysqli_query($con, $sql) or die(mysqli_error($con));
            $num= mysqli_num_rows($result);
            ?> 
   
    <br><br>
 
    
<div class="w3-content w3-container" id="about">
    <h3 class="w3-center">
        <?php
        $row5 = mysqli_fetch_array($result1);  
        if($row5['category'] == 'oil'){
            echo "OIL PAINTINGS";
        }
        if($row5['category'] == 'watercolor'){
            echo "WATERCOLOR PAINTINGS";
        }
        ?>
        <br><br>
    </h3>
  <div class="w3-row">
    
  </div>
  <?php 
            if($num == 0){
                echo "<center><strong>No Products Available</strong></center>";
            }
            else{
            while($row = mysqli_fetch_array($result)) 
                {
                    echo '<div class="row">';                    
                    echo '<div class="col-sm-3">';
                    echo "<a href='test.php?id=".$row['imgid']."' class='thumbnail w3-card w3-hover-shadow w3-animate-opacity'> <img height='200' width='236' src = 'images/".$row['imgname']."' ></a> </div>";
                    $num=$num -1;
                    if($num>0){
                    echo '<div class="col-sm-3">';                    
                    $row =mysqli_fetch_array($result);
                    echo "<a href='test.php?id=".$row['imgid']."' class='thumbnail w3-card w3-hover-shadow w3-animate-opacity'> <img height='200' width='236' src = 'images/".$row['imgname']."' > </a></div>";
                    $num=$num -1;
                    }
                    if($num>0){
                    echo'<div class="col-sm-3">';                    
                    $row =mysqli_fetch_array($result);
                    echo "<a href='test.php?id=".$row['imgid']."' class='thumbnail w3-card w3-hover-shadow w3-animate-opacity'> <img height='200' width='236' src = 'images/".$row['imgname']."' > </a></div>";
                     
                    $num=$num -1;
                    }
                    if($num>0){
                    echo'<div class="col-sm-3">';
                    $row = mysqli_fetch_array($result);
                    echo "<a href='test.php?id=".$row['imgid']."' class='thumbnail w3-card w3-hover-shadow w3-animate-opacity'> <img height='200' width='236' src = 'images/".$row['imgname']."' > </a></div>";                
                     $num=$num-1;
                     echo '</div>';  
                    }
                    }
                    
            }

?>
</div>
    
</body>
</html>