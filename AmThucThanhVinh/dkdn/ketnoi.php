<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname = "localhost";
$database = "shop_ban_hang";
$username = "root";
$password = "";
$conn = mysql_connect($hostname, $username, $password, $database) or    die("Connection failed: ");
mysql_select_db('shop_ban_hang',$conn) or die("Connection failed: ");

?>