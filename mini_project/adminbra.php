<html>

  <head>
    <title>Admin Page</title>
    <style>
      #vidspace {
                background-color:grey;
		border-style:solid;
                border-width:10px;
                width:60%;
                margin-left:20%;
      }
      #id {
                border-style:none;
      }
      body {
                background-color:grey;
                background-image:url(ulogin.jpg);
      }
      #heading {
               background-color:rgb(100, 100, 100);
               color:rgb(0, 0, 0);
               font-size:30;
      }
    </style>
  </head>

  <body>
    <div id=heading>
      <h3>Add Users</h3>
    
      <form name=admin>
        <a href=addvid.html><input type=button value="Click to add"></a>
      </form>
    </div>
  </body>
</html>
        

<?php

  $conn=mysqli_connect('localhost:3306', 'root', '', 'webseries') or die ("Unable to connect");
  $sql = "select * from videos";

  $result = mysqli_query($conn, $sql);

  $j=0;
  while ($row=mysqli_fetch_array($result)) {
	  for ($i = 0; $i < 8; $i++) {
	    $img[$j][$i] = $row[$i];
	  }
	  $j++;
  }

?>

    <?php for ($l=0; $l<$j; $l++) { ?> 
        <div id=vidspace >
          <form name=vid>
            <img id=img style="float:right" src="<?php echo $img[$l][6]; ?>" width=250 height=130><br>
            <b>Name:&nbsp </b><?php echo $img[$l][0]; ?><br>
            <b>Genre:&nbsp</b><?php echo $img[$l][1]; ?><br>
            <b>No of Seasons:&nbsp</b><?php echo $img[$l][2]; ?><br>
            <b>No of Episoded Per Season:&nbsp</b><?php echo $img[$l][3]; ?><br>
            <b>Duration:&nbsp</b><?php echo $img[$l][4]; ?><br>
            <b>Ratings:&nbsp</b><?php echo $img[$l][5]; ?><br>
            <input type=button value="Watch Trailer" style="float:right">
          </form>
	</div>
    <?php }?>
    

