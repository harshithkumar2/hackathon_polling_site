<?php
session_start();
if(isset($_POST['prof_submit'])){
require 'server.php';
$user = $_SESSION['userName'];
  $target = "../profile/".basename($_FILES['prof_img']['name']);
  $image = $_FILES['prof_img']['name'];

  $sql= mysqli_query($conn, "UPDATE register SET image ='$image' WHERE Uidusers='$user'");
  if(move_uploaded_file($_FILES['prof_img']['tmp_name'], $target)){
    $sql1 = mysqli_query($conn, "UPDATE register SET imgstatus =1 WHERE Uidusers='$user'");
     echo'<script>alert("upload success!");
     window.location.href = "../index.php";
     </script>';
     exit();

  }
  else{
    echo'<script>alert("upload failed!");
    location.window.href = "../index.php";
    </script>';
    exit();
  }
}
 ?>
