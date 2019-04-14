<?php
include 'config.php';
$ID = $_POST['id']; 
$sql3= $_POST['query'];
$result3= mysqli_query($con, $sql3) or die("The product is already added to the Favourites!");
header("Location:test.php?id=".$ID);
?>
