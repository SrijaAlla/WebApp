<?php

  session_start();

  if (count($_POST)>0) {
    $conn = mysqli_connect('localhost:3306', 'root', '', 'webseries') or die ("Unable to connect");
    $sql = "select role from user where username='".$_POST["username"]."' and password='".$_POST["password"]."'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
  
    if (is_array($row)) {
	    printf("%s\n", $row[0]);
      if ($row[0] == 'Admin') {
	      $_SESSION["admin"]=$row[0];
	      header('location: admin.php');
      }
      else if ($row[0]=="user"){
	      $_SESSION["user"]=$row[0];
	      header('location: user.php');
      }
    }
      else {
	      header('location: signup.html');
      }
  }
 
?>
