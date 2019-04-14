<?php

                include 'config.php';                 
                $con = mysqli_connect("localhost", "root", "", "peintio") or die(mysqli_error($con));
                $user= $_SESSION['u_email'];
                $sql2="Select uid from user where uemail='$user'";
                $result2= mysqli_query($con, $sql2) or die(mysqli_error($con));
                $row2= mysqli_fetch_array($result2);     
                $c_id= $row2['uid'];
                $id=$_GET['id'];
                $query_delete="Select pid from painting natural join image where imgid=$id";
                $result3= mysqli_query($con, $query_delete) or die(mysqli_error($con));
                $row3= mysqli_fetch_array($result3); 
                $p_id= $row3['pid'];
                $sql4="delete from favourite where uid=$c_id and pid=$p_id";
                $result4= mysqli_query($con, $sql4) or die(mysqli_error($con));
                header("Location:favourites.php");

?>