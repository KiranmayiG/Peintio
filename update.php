<?php
include 'config.php';
$Image_ID = $_SESSION['image_id'];

$sql = "SELECT * FROM image where imgid=$Image_ID";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$p_id= $row['pid'];

$category = $_POST['category'];
if($category == "Watercolor Painting"){
    $category = "watercolor";
}
if($category == "Oil Painting"){
    $category = "oil";
}


$update_query = "UPDATE painting SET Category = '$category'"
        . "WHERE pid = '$p_id'";

$update_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
    
header("Location: test.php?id=".$p_id);
?>

 