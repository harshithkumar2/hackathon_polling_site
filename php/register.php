<?php
$msg = "";
if(isset($_POST['register_submit'])){
  require "server.php";
  $uname = $_POST['user_name'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $date = $_POST['dob'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];
  $pass = $_POST['pass'];
  $repass = $_POST['re_pass'];
  $target = "../profile/".basename($_FILES['image']['name']);
  $image = $_FILES['image']['name'];

  if (empty($uname) || empty($name) || empty($email) || empty($date) || empty($gender) || empty($phone) || empty($pass) || empty($repass)) {
    header("Location: ../signup.php?error=emptyfields");
    exit();
  }
  elseif(!preg_match("/^[a-zA-Z0-9]*$/",$uname)){
    header("Location: ../signup.php?error=invalidusername");
    exit();
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidemail");
    exit();
  }elseif ($pass !== $repass) {
    header("Location: ../signup.php?error=wrongpass");
    exit();
  }
  else{
    $sql =  "SELECT * FROM register WHERE Uidusers = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("location: ../signup.php?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt, "s", $uname);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
    $num  = mysqli_stmt_num_rows($stmt);
    if($num > 0){
      header("Location: ../signup.php?error=usertaken");
      exit();
    }
    #no duplicate emails
    $sq = mysqli_query($conn, "SELECT * FROM register WHERE Emailusers='$email'");
    $ro = mysqli_num_rows($sq);
    if($ro > 0){
      header("Location: ../signup.php?error=emailtaken");
      exit();
    }
    else{

      $sql = "INSERT INTO register(Uidusers, Emailusers, Pwdusers, Name, Dob, Gender, Phone,image) VALUES(?,?,?,?,?,?,?,?)";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=sqlerror");
        exit();
      }
      else{
          $hash = password_hash($pass,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssssssss", $uname, $email, $hash, $name, $date, $gender, $phone, $image);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
          $msg="successfull uploaded";
          mysqli_query($conn, "UPDATE register SET imgstatus = 1 WHERE Uidusers = '$uname'");
        }
        else {
          $msg="failed";
        }
        header('location: ../login.php?success=Done');
        exit();
      }

    }
  }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}

else{
  header("Location: ../signup.php");
  exit();
}
