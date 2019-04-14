<?php
    include 'config.php';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($con,$_POST['Email']);
      $temp = mysqli_real_escape_string($con,$_POST['Password']);
      $mypassword= md5($temp);

      $sql = "SELECT uid,uname FROM user WHERE uemail = '$myusername' and upass = '$mypassword'";
      $result = mysqli_query($con,$sql) or die(mysqli_error($con));
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result) or die(mysqli_error($con));

      // If result matched $myusername and $mypassword, table row must be 1 row
      //if(!empty($count) && $count === 1) {
      if($count == 1){
         $_SESSION['u_email'] = $myusername;
         $_SESSION['u_id']= mysqli_insert_id($con);
         $_SESSION['message']="Successfully authenticated";
         header("Location: index.php");
      }
      else{
         $_SESSION['error']="Invalid username or password. Please try again";
         header("Location: index.php");
      }
   }
?>
