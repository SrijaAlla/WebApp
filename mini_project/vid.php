<?php
       $link = $_POST['series'];
?>


<html>
<head>
  <title>Happy binging</title>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image:url("img1.jpg"); background-color:#cccccc;}

.vid {
  text-align: center;
  margin:auto;
  padding:85px;
}

</style>
</head>
<body>
<div>
 <h1> <span>Trailer</span>
<div class=vid>
<video width="800" controls>
    <source src="<?php echo $link;?>.mp4" type=video/mp4> 
</video>
</div>
</div>
</body>
</html>

