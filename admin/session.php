<?php

  session_start();

  $user_check = $_SESSION['login_user'];
  //echo $user_check;
  //include('conconfig.php');
  $sql = "select user_name from user where user_name = '$user_check' ";

  $user = mysqli_fetch_assoc(mysqli_query($link, $sql));

  $login_session = $user['user_name'];

  if(!isset($_SESSION['login_user'])){
      header("location: ../login.php");
  }

 ?>