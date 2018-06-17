<?php
  include("conconfig.php");
  //$_SESSION['login_user'] ="raj@gmail.com";
  $myusername =  $_POST['username']; //'raj@gmail.com';
  $mypassword =  $_POST['password']; // 'site';
  // echo $myusername."  ".$mypassword;
  $sql = "SELECT user_id FROM user WHERE user_name = '$myusername' and password = '$mypassword'";
/*
  $getID = mysqli_fetch_assoc(mysqli_query($link, $sql));
  $userID = $getID['user_id'];
  //echo $userID;
  if($userID > 0){
    $_SESSION['login_user'] = $myusername;
    header("location: admin/adminhome.php");
  } else {
    header("location: admin/register.php");
  }
*/



  $result= $link->query($sql);
   
        if ($result->num_rows > 0) {
          $_SESSION['login_user'] = $myusername;
          header("location: admin/adminhome.php");
        } else {
          //header("location: admin/register.php");
         } 

  $link->close();
?>