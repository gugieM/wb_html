<?php
$username = 'root';
$password = '';
$db = 'workandbe';

$conn = mysql_connect('localhost', $username, $password) or die ("Unable to connect to database");
mysql_select_db($db);


?>
