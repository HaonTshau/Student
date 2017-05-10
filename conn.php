<?php
$con = mysql_connect("localhost","root","123456789");
if (!$con){
    die('Could not connect:'.mysql_error($con));
}
mysql_select_db("users",$con);
mysql_query("SET NAMES 'utf8'");
?>
