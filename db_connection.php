<?php
$hostname="localhost";
$username="root";
$password="";
$database="dynamic_project";
$connection=mysqli_connect($hostname,$username,$password,$database);
if(!$connection)
{	die("Connection failed: " . mysqli_connect_error());
}
?>