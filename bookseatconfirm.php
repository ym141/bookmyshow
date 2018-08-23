<?php
session_start();
include("connection.php");
$flg=$_REQUEST['flg'];
$admin_user=$_SESSION['user'];
//echo $admin_user;
$query="select * from booking where booking_id='$flg';";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
?>
<html>
<head>
<style>
#outer
{
	height:400px;
	width:400px;
	margin:0px auto;
	background:lightgrey;
	box-shadow:2px 2px 3px 5px;
	text-align:center;
}
</style>
</head>
<body>
<div id="outer">
<font face="prestina">
<h1>Your Bill</h1> </font>
Name :
 <?php 
//$q=$admin_user; 
//$query="select * from admin where id='$q'";
//$r=mysql_query($query);
//$ro=mysql_fetch_assoc($r);
//echo $ro['username'];
?><br>
Theater : <?php echo $row['theater'];?><br>
Number Of Seats Booked : <?php echo $row['total_seat']; ?><br>
Platinum : <?php echo $row['platinum']; ?><br>
Gold : <?php echo $row['gold']; ?><br>
Silver : <?php echo $row['silver']; ?><br>
Show Date: <?php echo $row['show_date']; ?><br>
Show Time: <?php echo $row['show_time']; ?><br>
Total Amount : <?php echo $row['totalprice']; ?><br>
</div>
<?php
}
?>
</body>
</html>