<?php
$servername = "localhost";
$dbusername = "root";
$dbpasswod = "";
$dbname = "hackathon";

$conn = mysqli_connect($servername, $dbusername, $dbpasswod, $dbname);

if(!$conn){
  die("connection error:".mysqli_connect_error());
}
 ?>
