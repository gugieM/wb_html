<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "workandbe";
$db = mysql_connect($mysql_hostname, $mysql_user, $mysql_password)
or die("Oops! Something went wrong".);
mysql_select_db($mysql_database, $db) or die("Oops! Something went wrong.");


?>
