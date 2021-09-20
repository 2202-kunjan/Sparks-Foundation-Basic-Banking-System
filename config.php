<?php
$dbhost="localhost";
$dbname="sparks";
$dbusername="root";
$dbpass="";

$mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
$conn=mysqli_connect("localhost","root","","sparks");
if($conn-> connect_error){
  die("Connection failed:". $conn-> connect_error);
}
?>
