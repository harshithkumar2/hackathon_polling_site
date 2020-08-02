<?php
$msg= "";
if(isset($_POST['upload_btn'])){
require 'server.php';
$target = "../img/".basename($_FILES['image']['name']);
$image = $_FILES['image']['name'];
$sql = mysqli_query($conn, "INSERT INTO total(image) VALUES ('$image') ");

if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
  $msg="successfull uploaded";
}
else {
  $msg="failed";
}
}
 ?>
