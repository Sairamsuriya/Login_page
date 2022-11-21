<?php
$host="localhost";
$user="root";
$password="";
$db_name="20227";
$con=mysqli_connect($host,$user,$password,$db_name);
if(mysqli_connect_errno())
{
die("Failed to connect with Mysql".mysqli_connect_errno());
}
?>