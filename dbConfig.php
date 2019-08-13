<?php
define ("DB_HOST", "phmysqldb.mysql.database.azure.com"); // Your database host name
define ("DB_USER", "prabaharanh@phmysqldb"); // Your database user
define ("DB_PASS","Radhah@5969"); // Your database password
define ("DB_NAME","dblogin"); // Your database name

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysqli_select_db($link, DB_NAME) or die("Couldn't select database");
?>