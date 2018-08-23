<?php
session_start();
include("connection.php");
$theater=$_POST['theater'];
$date=$_POST['date'];
echo $date."<br>";
//$th=$_REQUEST['th'];
$id=$_REQUEST['id'];
$time=$_POST['time'];
echo $time."<br>";


$result=0;

$admin_user=$_SESSION['user'];
echo "admin_id= ".$admin_user;
echo "<br>";
$seat=implode(",",$_POST['silver']);
$arr=explode(",",$seat);

//echo "<br>";
if($arr[0]=="")
{
	echo "yes"."<br>";
	$r1=0;
}
else
{
	echo $r1=count($arr);
	echo "<br>";
	echo $p1=$r1*100;
}



$seatg=implode(",",$_POST['gold']);
$arr1=explode(",",$seatg);
//echo "<br>";
if($arr1[0]=="")
{
	echo "yes"."<br>";
	$r1=0;
}
else
{
	echo $r2=count($arr1);
	echo "<br>";
	echo $p2=$r2*200;
}

$seatp=implode(",",$_POST['platinum']);
$arr2=explode(",",$seatp);
//echo "<br>";
if($arr2[0]=="")
{
	echo "yes"."<br>";
	$r1=0;
}
else
{
	echo $r3=count($arr2);
	echo "<br>";
	echo $p3=$r3*300;
}
if($arr[0]=="" AND $arr1[0]=="" AND $arr2[0]=="")
{
	header("Location:bookseat.php");
}

echo $result=$result+$r1+$r2+$r3;
echo $total=$p1+$p2+$p3;

//switch($th)
//{
//case "Wave": $total=$total+10;
//break;
//case "PVR": $total=$total+20;
//break;
//case "Inox": $total=$total+30;
//break;
//case "Big Cinema": $total=$total+5;
//break;
//case "Fun": $total=$total+15;
//break;
//default:$total=$total;
//break;

//}

//$query="update booking set silver='$seat',gold= '$seatg',platinum='$seatp',total_seat='$result',show_date='$date',show_time='$time',totalprice='$total' where booking_date=curdate() and booking_time=curtime()";

$query="insert into booking(silver,gold,platinum,total_seat,show_date,show_time,totalprice,theater,user_id,moovie_id,booking_date,booking_time) values('$seat','$seatg','$seatp','$result','$date','$time','$total','$theater','$admin_user','$id',curdate(),curtime())";

mysql_query($query);



$query1="select booking_id from booking where user_id='$admin_user' and moovie_id='$id' and show_date='$date' and show_time='$time' and total_seat='$result'";
$re=mysql_query($query1);
$ro=mysql_fetch_assoc($re);
//echo "<br>";
$pt=$ro['booking_id'];

header("Location:bookseatconfirm.php?flg=$pt");
?>