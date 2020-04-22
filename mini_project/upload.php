<html>
	<head>
		<title>Upload</title>
        <style>
body {font-family:Arial ,Helvetica, sans-serif; background-image:url("img1.jpg"); background-color:#cccccc;}
form { border: 3px solid #ffffff;}
input[tye=text] {
	width: 90%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #e6f2ff;
	box-sizing: border-box;
	border-radius: 25px;
}
.container { 
  text-align: center;
  margin:right;
  width: 40%;
  padding: 12px;
  border-width:0px;
  border-style:none;
  border-radius:25px;
}

.but {
        text-align: left;
	border-radius: 25px;
}
.input {
   border-radius: 25px;
   padding: 12px;
   width:40%
}

.inp {
	text-align: left;
	border-radius: 25px;
	padding: 40px;
	
}

#button {
  background-color: #0800ff;
  color: white;
  padding: 10px 10px;
  margin: 6px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  border-radius:25px;
}
.login {
	border-width:0px;
	border-style:none;
	padding: 25px;
}
.info {
   border-radius: 25px;
   padding :12px;
}

#button:hover {
  opacity: 0.8;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
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

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}


 </style>
	</head>

	<body>
                   <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">Popular</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">TV-Shows</a>
    <div class="dropdown-content">
      <a href="#">English</a>
      <a href="#">Korean</a>
      <a href="#">Others</a>
    </div>
  </li>
</ul>

<h1> Upload webseries</h1>

		<div class="container">
				<form class=login method=post action=addvid.php>
					<div class=inp>
						<label for="sname"><b>Name of Web series</b></label><br>
						<input type=text name=sname placeholder="Type name of web series"/><br><br>
						<label for=genre><b>Genre</b></label><br>
					        <input type=text name=genre placeholder="Genre of the series">
						<br><br>
						<label for="duration"><b>Duration</b></label><br>
					        <input type=text name=duration id="duration" placeholder="Duration of each episode"/>
						<br><br>
						<!--	</div>-->
                                                <label for="seasons"><b>Seasons</b></label><br>
                                                <input type=text name=seasons placeholder="Number of seasons"/><br><br>
                                                <label for="episodes"><b>Episodes</b><label><br>
                                                <input type=text name=episodes placeholder="Episodes per seasons"/><br><br>
						<label for=img><b>Image of web series</b></label><br>
					<input type=file name=img id="fileToupload"/>
					<br><br>
					<label for=vide><b>Video of Webseries</b></label><br>
					<input type=file name=vid id="videoupload"/><br><br>
                                        <label for=ratings><b>Ratings</b><label><br>
                                        <input type=text name=ratings placeholder="rating"/><br><br>
					<br><br>

					<!-- <div class=but>-->
					<input  id="button" type=submit name=Upload/>
					</div>
				</form>
		</div>
	</body>

</html>
