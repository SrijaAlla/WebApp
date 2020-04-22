<?php

  $fileexist = 0;
  $sname = $_FILES['name'];
  $link = mysqli_connect('localhost:3306', 'root', '', 'webseries') or die ("Unable to connect");

  $query = "select sname from videos where sname='$sname'";
  $result = mysqli_query($link, $query);

  while ($row = mysqli_fetch_array($result)) { 
    if ($row['name'] == $sname) {
      $fileexist = 1;
    }
  }

  if ($fileexist == 0) {
	 
	  $sql = " insert into videos(sname,genre,duration,seasons,episodes,img,vid,ratings) values('".$_POST['sname']."', '".$_POST['genre']."', '".$_POST['duration']."', '".$_POST['seasons']."', '".$_POST['episodes']."', '".$_POST['img']."', '".$_POST['vid']."', '".$_POST['ratings']."')";

    $result=mysqli_query($link,$sql);
    $sql1 = "update videos set dadd=CURDATE()";
    $result1 = mysqli_query($link,$sql1);
    if ($result) {
	    echo "File Uploaded\n";
	    header('location: admin.php');
    }
    else {
	    echo "Error during Uploading\n";
    }
  }
?>


<html>
  <head>
    <title> Uploading</title>
  </head>

  <body>
    <br>
  </body>

</html>
