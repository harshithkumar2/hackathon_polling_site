<?php
if(isset($_POST['login_submit'])){

  $login_name = $_POST['login_name'];
  $login_pass = $_POST['login_pass'];

  if (empty($login_name) || empty($login_pass) ) {
    header("Location: ../login.php?error=emptyfields");
    exit();
  }else{
    if($login_name == 'ADMIN' and $login_pass == 'qwertyuiop'){
      session_start();
      $_SESSION['userID'] = 'ADMIN';
      $_SESSION['userName'] = 'ADMIN';
      header('location: ../admin_dash.php?success=done');
      exit();
    }
    else{
      header('location: ../index.php?error=nouserfound');
      exit();
    }
}
}
else{
  header("location: ../index.php");
  exit();
}
 ?>
