<?php
session_start();
include('connection.php');

$op = $_POST['op'];
echo $op;
$np = $_POST['np'];
echo $np;
$cnp = $_POST['cnp']; 
echo $cnp;

$email = $_SESSION['user'];
echo $email;
$query="select * from admin where email='$email' ";
$res = mysql_query($query);
$row = mysql_fetch_array($res);
$password = $row['password'];

if($password == $op)
{
	if($op == $np)
	{
		header('location:change.php?pass=1');
	}
	else
	{
		if($np == $cnp)
		{
			$update = "update admin set password='$np' where email='$email' ";
			if(mysql_query($update))
			{
				header('location:logout.php');
			}
			else
			{
				header('location:change.php?pass=2');
			}
		}
	}
}
else
{
	header('location:change.php?pass=3');
}
	
?>