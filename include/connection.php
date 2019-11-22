<?php
$host='localhost';
$user='root';
$password='';
$dbname='inventory';
$koneksi=mysql_connect($host,$user,$password) or die(mysql_error());
$dbselect=mysql_select_db($dbname);
?>


<!-- <?php
//$db['host'] = "localhost"; //host
//$db['user'] = "root"; //username database
//$db['pass'] = ""; //password database
//$db['name'] = "inventory"; //nama database
//$koneksi = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['name']);
//phpinfo()
?> -->