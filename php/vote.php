<?php
session_start();
if(isset($_POST['vote'])){

  require 'server.php';
  $user = $_SESSION['userName'];

  $check_status = mysqli_query($conn, "SELECT * FROM register WHERE Uidusers = '$user'");
  $num = mysqli_num_rows($check_status);
  $row = mysqli_fetch_assoc($check_status);
  $user_status = $row['status'];
  if($user_status == 1){
    echo '<script>alert("Already voted,Thank you");
          window.location.href = "../index.php";
    </script>';

  }
else{

  $sql = mysqli_query($conn, "UPDATE register SET status=1 WHERE Uidusers='$user'");
  echo '<script>
  alert("voted successfully");
        window.location.href = "../index.php";
  </script>';
  exit();
}
}
else{
  header('location: ../index.php');
  exit();
}
 ?>
