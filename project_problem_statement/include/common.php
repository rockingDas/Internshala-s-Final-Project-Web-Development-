<?php
session_start();
/*$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

$con= new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
	die("Connection Failed ". $con->connect_error);
}

?>