<?php
    $msg = "";
    include 'config.php';
    
    $category = $_POST['category1'];
    
    $s_email_id = $_SESSION['u_email'];    
    $sql2 = "SELECT uid from user WHERE uemail = '$s_email_id'";
    
    $result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
    $row2 = mysqli_fetch_array($result2);
    $s_id = $row2['uid'];
    
    if($category == 'Oil Painting'){
        $category = 'oil';
    }
    if($category == 'Watercolor Painting'){
        $category = 'watercolor';
    }
    
    
    $upload_query = "INSERT INTO painting (category,uid)"
            . " VALUES ('$category','$s_id')";
    $result_set = mysqli_query($con, $upload_query) or die(mysqli_error($con));
    
    $sql1 = "SELECT MAX(pid) as prod_id FROM painting";
    $result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
    $row1 = mysqli_fetch_array($result1);
    $p_id = $row1['prod_id'];
        
    //if upload button is pressed
    if(isset($_POST['upload'])) {
        //the path to store the uploaded image
        $target = "images/".basename($_FILES['image']['name']);
                
       // get all the submitted data from the form
       $image = $_FILES['image']['name'];
       
       $sql = "INSERT INTO image (imgname,pid) VALUES ('$image','$p_id')";
       $result = mysqli_query($con, $sql) or die(mysqli_error($con));// stores the submitted data in the table : images
       
       //Moving the uploaded image into the folder : images
       if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
           $msg = "Image uploaded successfully";
       }else {
           $msg = "There was a problem uploading image";
       }
    }
    
    header("Location: index.php");
   
   echo $msg;
?> 