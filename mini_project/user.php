<html>
	<head>

<title>User page</title>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image:url("img1.jpg"); background-color:#cccccc;}

.popular {
  display: flex;
  padding: 25px;
}
.ref {
   color:#e62e00;
}
.ref1 {
  color:#ffff00;
}
#Watch {
 padding: 5px;
 background-color:#ffffcc ;
 margin: 2px 0;
 border:none;
 cursor: pointer;
 width: 20%;
 border-radius:25px; 
}   
.container > div {
  flex: 1;
  padding:25px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #000000;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: #4da6ff;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
</style>

	</head>

	<body>
<div class=page>
		   <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#popular">Popular</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">TV-Shows</a>
    <div class="dropdown-content">
      <a href="#">English</a>
      <a href="#">Korean</a>
      <a href="#">Others</a>
    </div>
  </li>
<li style="float:right"><a href="loginpage.html">Logout</a></li>
</ul>
   <br>

<!--		<div>
			<div class=popular>
				<a href="#"><img src="super.jpg" width="305" height="270"></a>
				<a href="#"><img src="stranger.jpeg" width="305" height="270"></a>
			</div>
		</div>-->



<?php

  $conn=mysqli_connect('localhost:3306', 'root', '', 'webseries') or die ("Unable to connect");
  $sql = "select * from videos";

  $result = mysqli_query($conn, $sql);

  $j=0;
  while ($row=mysqli_fetch_array($result)) {
          for ($i = 0; $i < 9; $i++) {
            $img[$j][$i] = $row[$i];
          }
          $j++;
  }

?>

		<div>
           
			<div class=popular>
    <?php for ($l=0; $l<$j; $l++) { ?>
	    <div class=vid>
            <form method=post action=vid.php>
         <img src="<?php echo $img[$l][5]; ?>" width="305" height="270"><br><br>
            <input type=hidden name=series value="<?php echo $img[$l][0]; ?>"/><br>
           <span class=ref> <b>Name:&nbsp </b></span><span class=ref1><?php echo $img[$l][0]; ?></span><br>
           <span class=ref> <b>Genre:&nbsp</b></span><span class=ref1><?php echo $img[$l][1]; ?></span><br>
           <span class=ref> <b>No of Seasons:&nbsp</b> </span><span class=ref1><?php echo $img[$l][3]; ?></span><br>
           <span class=ref> <b>No of Episodes Per Season:&nbsp</b></span><span class=ref1><?php echo $img[$l][4]; ?></span><br>
           <span class=ref> <b>Duration:&nbsp</b></span><span class=ref1><?php echo $img[$l][2]; ?></span><br>
            <span class=ref><b>Date Uploaded:</b></span><span class=ref1><?php echo $img[$l][7]; ?></span><br>
	    <span class=ref><b>Ratings:&nbsp</b></span><span class=ref1><?php echo $img[$l][8]; ?></span><br>
             <input type=submit value=watch id=Watch />
            
             </form>
			</div>
    <?php }?>
		</div>
</div>
	</body>
</html>
