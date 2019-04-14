<!DOCTYPE html>
<html>
<title>PEINTIO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="peintio.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
  <?php
        include 'nav2.php';
        if(isset($_SESSION['u_id'])){

            $user= $_SESSION['u_email'];
            $sql="Select * from user natural join favourite natural join painting natural join image where uemail='".$user."'";
            $result= mysqli_query($con, $sql) or die(mysqli_error($con));
            $num= mysqli_num_rows($result);
             echo '<div class="w3-container">';
 }

                if($num == 0){
                    echo "<center><strong><br><br>No Products Added Yet!</strong></center>";
                }
                else {
                while($row = mysqli_fetch_array($result))
                {
                                           echo '<br><br><br><div class="row">';
                                           echo '<div class="col-sm-3">';
                                           echo "<a href='test.php?id=".$row['imgid']."' class='thumbnail w3-card w3-hover-shadow w3-animate-opacity'> ";
                                           echo '<div class="col-sm-10">';
                                           echo "<img height='304' width='236' src = 'images/".$row['imgname']."' ></div>";
                                              ?>
                                        <div col-sm-2>
                                                <form method="post" action="delete.php?id=<?php echo $row['imgid']?>" align="right">
                                                      <button type ="submit"  class="btn btn-success glyphicon glyphicon-trash">   </button>
                                                </form>
                                        </div> </a></div>

                                           <?php
                                          $num=$num -1;
                                            if($num>0){
                                           echo '<div class="col-sm-3">';
                                           $row = mysqli_fetch_array($result);
                                           echo "<a href='test.php?id=".$row['imgid']."' class='thumbnail w3-card w3-hover-shadow w3-animate-opacity'> ";
                                           echo '<div class="col-sm-10">';
                                           echo "<img height='304' width='236' src = 'images/".$row['imgname']."' ></div>";
                                              ?>
                                        <div col-sm-2>
                                                <form method="post" action="delete.php?id=<?php echo $row['imgid']?>" align="right">
                                                      <button type ="submit"  class="btn btn-success glyphicon glyphicon-trash">   </button>
                                                </form>
                                        </div> </a></div>

                                           <?php
                                           $num=$num -1;
                                            }
                                            if($num>0){
                                           echo '<div class="col-sm-3">';
                                           $row = mysqli_fetch_array($result);
                                           echo "<a href='test.php?id=".$row['imgid']."' class='thumbnail w3-card w3-hover-shadow w3-animate-opacity'> ";
                                           echo '<div class="col-sm-10">';
                                           echo "<img height='304' width='236' src = 'images/".$row['imgname']."' ></div>";
                                              ?>
                                        <div col-sm-2>
                                                <form method="post" action="delete.php?id=<?php echo $row['imgid']?>" align="right">
                                                      <button type ="submit"  class="btn btn-success glyphicon glyphicon-trash">   </button>
                                                </form>
                                        </div> </a></div>

                                           <?php
                                           $num=$num -1;
                                            }
                                            if($num>0){
                                            echo '<div class="col-sm-3">';
                                           $row = mysqli_fetch_array($result);
                                           echo "<a href='test.php?id=".$row['imgid']."' class='thumbnail w3-card w3-hover-shadow w3-animate-opacity'> ";
                                           echo '<div class="col-sm-10">';
                                           echo "<img height='304' width='236' src = 'images/".$row['imgname']."' ></div>";
                                              ?>
                                        <div col-sm-2>
                                                <form method="post" action="delete.php?id=<?php echo $row['imgid']?>" align="right">
                                                      <button type ="submit"  class="btn btn-success glyphicon glyphicon-trash">   </button>
                                                </form>
                                        </div> </a></div>

                                           <?php
                                           $num=$num -1;
                                            }
                                           echo '</div>';


         }
       }
    ?>
</div>
</body>
</html>
