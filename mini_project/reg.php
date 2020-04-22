<?php

  if (count($_POST) > 0) {
    $conn = mysqli_connect('localhost:3306', 'root', '', 'webseries') or die ("Unable to connect");

  $sql = 'insert into user(fname,lname,email,username,password,role) values ("'.$_POST['fname'].'", "'.$_POST['lname'].'", "'.$_POST["email"].'","'.$_POST["username"].'","'.$_POST["password"].'",user';
  echo $_POST["password"];
  mysqli_query($conn, $sql);
  header("Location:loginpage.html");

  }

?>
