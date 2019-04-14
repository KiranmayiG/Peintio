 <?php
include 'config.php';
$ID = $_POST['id']; 
$P_ID = $_POST['p_id']; 
$rating= $_POST['rate'];
$query="update painting set rsum = rsum + $rating, rcount= rcount + 1 where pid=$P_ID";  
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$query2="update painting set ravg = rsum/rcount where pid=$P_ID"; 
$result2 = mysqli_query($con, $query2) or die(mysqli_error($con));
header("Location:test.php?id=".$ID);
?>
  
