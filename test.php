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

$con = mysqli_connect("localhost", "root", "", "peintio") or die(mysqli_error($con));
include 'update_modal.php';
if(isset($_GET['id'])){
    $ID = $_GET['id'];
    $_SESSION['image_id']=$ID;
    $sql = "SELECT * FROM image natural join painting natural join user where imgid=$ID";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $p_id= $row['pid'];
}

?>

    <br><br>
   <div class='container'>
    <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
            <?php
            echo "<a class='thumbnail w3-card w3-hover-shadow w3-animate-opacity'> <img height='304' width='236' src = 'images/".$row['imgname']."' > </a></div>";
            ?>
        </div>
        <div class="col-sm-4">
        </div>
    </div>
       <br>
     <?php
     if(isset($_SESSION['u_id'])){
     $cust= $_SESSION['u_email'];
     $sql2="Select uid from user where uemail='$cust'";
     $result2= mysqli_query($con, $sql2) or die(mysqli_error($con));
     $row2= mysqli_fetch_array($result2);
     $c_id= $row2['uid'];
     $sql3= "insert into favourite(uid,pid) values ('$c_id','$p_id')";
         ?>
        <div class='row'>
        <div class='col-sm-2'></div>
        <div class='col-sm-8 details w3-card w3-panel w3-hover-shadow w3-animate-opacity'>
            <h4>
                <form action="insert_fav.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $ID;?>"/>
                    <input type="hidden" name="query" value="<?php echo $sql3;?>"/>

                    Add to Favourites:  <button type="submit" class='glyphicon glyphicon-heart'></button>
                </form>
                <br>
                <form action="rate_handle.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $ID;?>"/>
                    <input type="hidden" name="p_id" value="<?php echo $p_id;?>"/>
                    Rate:
                     <label><input type="radio" name="rate" value="5"> 5 </label>
                <label><input type="radio" name="rate" value="4"> 4 </label>
                 <label><input type="radio" name="rate" value="3"> 3 </label>
                <label><input type="radio" name="rate" value="2"> 2</label>
                 <label><input type="radio" name="rate" value="1"> 1 </label>

                  <button type="submit" class='glyphicon glyphicon-star'></button>
                </form>

            </h4>
        </div>
    </div>
    <?php } ?>


    <br>
        <div class='row'>
            <div class='details'>
                <div class="col-sm-2"></div>
                <div class="col-sm-8 w3-card details w3-hover-shadow w3-animate-opacity">
                    <h4> <b>Category:</b>
                        <?php
                        if($row['category'] == 'oil'){
                            echo "Oil Painting";
                        }
                        if($row['category'] == 'watercolor'){
                            echo "Watercolor Painting";
                        }

                        ?>
                    </h4>

                    <h4><b>Average rating: </b>
                        <?php
                        echo  $row['ravg'];
                        ?>
                    </h4>



                    <h4><b>Contact owner! </b></h4>

                    <h5>
                        <?php
                        echo  $row['uemail'];
                        ?>
                    </h5>

                    <?php
                    if(isset($_SESSION['u_id'])) {
                    if($_SESSION['u_email']==$row['uemail']) {?>
                    <center><a href="#updateproduct"  data-toggle="modal"
                               data-target="#updateproduct"
                               class="btn w3-btn w3-black w3-small w3-padding-small"
                               role="button"><h4>Update Information</h4></a></center>
                        <br>
                    <?php }}?>

                </div>

            </div>
        </div>
    <br>
        <br> <br>
    </div>

</body>

</html>
