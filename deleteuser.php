<?php
$id=$_REQUEST['id'];
echo $id;
mysql_connect('localhost','root','');
mysql_select_db("bookmyticket");
$query="delete from register where id='$id'";
mysql_query($query);

header("location:displayuser.php"); 



?>