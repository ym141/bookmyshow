<?php
session_start();
session_destroy();
header ("Location:login.php?msg=2");
header ("Location:change.php");
?>