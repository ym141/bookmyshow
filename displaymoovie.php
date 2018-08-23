<?php
session_start();
include("connection.php");
$query="select * from tbl_moovie order by id";
$res=mysql_query($query);
?>
<html>
<head>
<title>Display Moovie</title>
<link rel="shortcut icon" href="../images/m.png" type="image/png">
<style>
body{
	//background-image:url('../images/interior.jpg');
//	background-repeat:no-repeat;
	background-attachment:fixed;
	background-color:black;
}
#outer{
	width:1000px;
	margin:auto;
	text-align:center;
	margin-top:100px;
//	border:1px solid white;
}
#inner{
	width:1000px;
	margin:auto;
	text-align:center;
	margin-top:100px;
//	border:1px solid;
}
#inner h1{
	width:300px;
	color:white;
//	color:#fcc88e;
	font-size:25px;
	background-color:#1b1b1b;
	padding-top:10px;
	padding-bottom:10px;
	border-radius:25px;
	box-shadow:4px 4px 10px black;
	-webkit-transition:-webkit-transform 2s;
}
.btn{
	width:100px;
	height:25px;
	margin-top:10px;
	background-color:transparent;
	border:1px solid white;
	-webkit-transition:-webkit-transform 2s;
	
}
.btn:hover{
	margin-top:10px;
	background-color:#fcc88e;
	border-radius:14px;
	border:1px solid white;
	-webkit-box-shadow:rgba(0,0,0,0.5) 1px 1px 1px 1px;
	-webkit-transform:scale(1.07);
}
.img1{
	-webkit-transition:-webkit-transform 2s;
}
.img1:hover{
	-webkit-box-shadow:rgba(0,0,0,0.5) 1px 1px 1px 1px;
	-webkit-transform:scale(1.07);
//	border:1px solid black;
}
.showmovie{
	height:850px;
	width:300px;
	float:left;
	color:white;
//	background-color:yellow;
	margin:0px auto;
	margin-top:10px;
	margin-left:25px;
//	box-shadow:1px 1px 3px black;
}
.showmovie h3{
	color:#fcc88e;
}
td{
	height:30px;
}
td a{
	background-color:#1b1b1b;
	color:black;
	padding-top:5px;
	padding-bottom:5px;
	padding-left:15px;
	padding-right:15px;
	border-radius:5px;
}
td a:hover{
	-webkit-box-shadow:rgba(0,0,0,0.5) 1px 1px 1px 1px;
	//background-color:#fcc88e;
}
#nav{
	height:50px;
	width:1000px;
//	background-color:black;
			}
#nav ul{
	padding-top:5px;
	list-style-type:none;
}
#nav ul li{
	display:inline-block;
	width:120px;
//	border:1px solid;
	padding:10px;
	color:white;
	margin-top:5px;
	//background-color:#1b1b1b;
	border-radius:10px;
	text-align:center;
	box-shadow:2px 2px 5px black;
	-webkit-transition:-webkit-transform 2s;
}
#nav ul li:hover{
	display:inline-block;
	width:120px;
//	border:1px solid;
	padding:10px;
	color:black;
	border-radius:25px;
	background-color:#fcc88e;
//	border-radius:10px;
	text-align:center;
	//background-color:#fcc88e;
	-webkit-transform:scale(1.1);
}
#nav ul li a{
	color:white
	text-decoration:none;
}
</style>
</head>
<body>
<div id="outer">
	<div id="nav">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="../index.php">Go To Site</a></li>
		<li><a href="inputmoovie.php">Input Moovie</a></li>
		<li style="background-color:#fcc88e;"><a href="displaymoovie.php">Display Moovies</a></li>
		<li><a href="contactus.php">Contact Us</a></li>
		<li><a href="admin\displayuser.php">Display Users</a></li>
		<li><a href="change.php">Change Password</a></li>
		<li><a href="logout.php">Logout</a></li>
		<li><a href="slider.php">Slider</a></li>
		</ul>
	</div>
	<div id="inner"><?php while($row=mysql_fetch_assoc($res)){  	?><div class="showmovie">
		<img src="C:\wamp\www\bookmyticket\admin<?php echo $row['poster']; ?>" class="img1" width="200" height="200"/></br></br>
		<table style="color:white;" align="center">
		<tr>
		<td width="75px">Director</td>
		<td width="150px"><?php echo $row['director']; ?></td>
		</tr>
		<tr>
		<td width="75px">Producer</td>
		<td width="150px"><?php echo $row['producer']; ?></td>
		</tr>
		<tr>
		<td width="75px">Star Cast</td>
		<td width="150px"><?php echo $row['starcast']; ?></td>
		</tr>
		<tr>
		<td width="75px">Theater</td>
		<td width="150px"><?php echo $row['theater']; ?></td>
		</tr>
		<tr>
		<td width="75px">Price</td>
		<td width="150px"><?php echo $row['price']; ?></td>
		</tr>
		<tr>
		<td width="75px">Release On</td>
		<td width="150px"><?php echo $row['releaseon']; ?></td>
		</tr>
		<tr>
		<td width="75px">Description</td>
		<td width="150px"><?php echo $row['description']; ?></td>
		</tr>
		<tr>
		<td width="75px">Duration</td>
		<td width="150px"><?php echo $row['duration']; ?></td>
		</tr>
		<tr>
		<td width="75px">Rating</td>
		<td width="150px"><?php echo $row['rating']; ?></td>
		</tr>
		<tr>
		<td width="75px">Language</td>
		<td width="150px"><?php echo $row['language']; ?></td>
		</tr>
		<tr>
		<td width="75px">Music</td>
		<td width="150px"><?php echo $row['music']; ?></td>
		<tr>
		<tr>
		<td width="75px">Genre</td>
		<td width="150px"><?php 
		echo $row['genre']; ?></td>
		</tr>
		<td width="75px"><a href="deletemovie.php?id=<?php echo $row['movie_id']; ?>">Delete</a></td>
		
		<td width="150px"><a href="editmovie.php?id=<?php echo $row['movie_id']; ?>">Edit</a></td>
		<a href="bookseat.php?id=<?php echo $row['id'];?>">book ticket</a>
</tr>
		</table>
	</div><?php } ?></div>
</div>
</body>
</html>