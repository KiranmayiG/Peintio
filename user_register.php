 <?php
 include 'config.php';
//$con = mysqli_connect("localhost", "root", "", "peintio") or die(mysqli_error($con));
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Number'];
$pass=$_POST['Password'];
$encrypted= md5($pass);
$user_registration_query = "insert into user(uname,uemail,upass,uphone) values ('$name', '$email','$encrypted','$phone')";
$result_set = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
$_SESSION['created_user']="Successfully signed up!";
header("Location: index.php");
?>
