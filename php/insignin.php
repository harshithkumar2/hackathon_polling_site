<?php
if(isset($_POST['login_submit'])){
  require "server.php";

  $login_name = $_POST['login_name'];
  $login_pass = $_POST['login_pass'];

  if (empty($login_name) || empty($login_pass) ) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }else{
    $sql = mysqli_query($conn , "SELECT * FROM register WHERE Uidusers = '$login_name'");
    $num = mysqli_num_rows($sql);
    if($num == 1){
      $row = mysqli_fetch_assoc($sql);
      $pass_check = password_verify($login_pass, $row[Pwdusers]);
      if($pass_check == true){
        session_start();
        $_SESSION['userID'] = $row['Id'];
        $_SESSION['userName'] = $row['Uidusers'];
        header("location: ../index2.php?success=loggedIN");
        exit();
      }else{
        header("location: ../index.php?error=wrongpwd");
        exit();
      }
    }else{
      header("location: ../index.php?error=nouserfound");
      exit();
    }
  }
}else{
  header("location: ../index.php");
  exit();
}
 ?>
