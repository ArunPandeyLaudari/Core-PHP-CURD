<?php 
$server="localhost";
$user="root";
$pass="";
$db="lictblog";

//create connection garna lai
$conn=mysqli_connect($server,$user,$pass,$db);

//check connection
if(!$conn){
die("connection failed:".mysqli_connect_error());
}
?>