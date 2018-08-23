<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
	echo "invalid username or password";
}
if($msg==2)
{
	echo "logout successfully";
}

if($msg==3)
{
	echo "please enter your username and password";
}

?>
<html>
<head><link href="login.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<center>
<div id="nav">
		<center><ul>
		<li><a href="index.php">Go To Site</a></li>
		<li><a href="register.php">Registration</a></li>
		</ul></center>
	</div>
<div id="outer">
<center><h1><span style="color:blue;">B<span><span style="color:red;">O</span><span style="color:yellow;">O</span><span style="color:purple">K</span>&nbsp;&nbsp;<span style="color:green">M</span><span style="color:blue">Y</span>
&nbsp;&nbsp;<span style="color:red">T</span><span style="color:purple">I</span><span style="color:red">C</span><span style="color:green">K</span><span style="color:blue">E</span><span style="color:yellow">T</h1>
<br/>
<br/>
<form action="logincode.php" method="post">
<table>
<tr>
<input type="email" name="email" placeholder="enter your email id"/><br/><br/>
</tr>
<tr>
<input type="password" name="pass" placeholder="enter your password"/><br/><br/>
</tr>
<tr>
<input type="submit" value="sign in" style="background-color:blue;" style="size:32" style="border-color:blue solid;"/>
</a><br/>
</tr>
</center>
</table>
</form>
</div>
</body>
</html>