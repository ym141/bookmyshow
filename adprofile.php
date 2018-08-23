<?php
session_start();

echo "welcome";
echo "<br/>";
echo $_SESSION['user'];	


?>
<a href="logout.php">logout</a><br/>
<a href="change.php">change password</a>
<a href="discuss.php">Discussion Board</a>