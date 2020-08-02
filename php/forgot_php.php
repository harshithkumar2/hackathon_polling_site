<?php
if(isset($_POST['forgot_submit'])){
  require 'server.php';

  $user = $_POST['user'];
  $mail = $_POST['mail'];
  $pass = $_POST['pass'];
  $repass = $_POST['repass'];

  if(empty($user) || empty($mail) || empty($pass) || empty($repass)){
    header("location: ../forgot.php?error=emptyfields");
    exit();
  }
  else if($pass != $repass){
    header("location: ../forgot.php?error=passdinmatch");
    exit();
  }
else {
$sql = mysqli_query($conn, "SELECT * FROM register WHERE Uidusers='$user' AND Emailusers='$mail'");
if(mysqli_num_rows($sql) == 1){
  $hash = password_hash($pass, PASSWORD_DEFAULT);
  mysqli_query($conn, "UPDATE register SET Pwdusers='$hash' WHERE Uidusers='$user' AND Emailusers='$mail'");
  header("location: ../login.php?success=done");
  exit();
}
else {
  header("location: ../forgot.php?error=bothwrong");
  exit();
} 

}
}
 ?>
