<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>VOTER POLL</title>
    <link rel="icon" href="img/icon.png" type="image/png" >
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">VOTER POLL</a>

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="team.php">Team</a>
    </li>
    <li class="nav-item">
      <?php
      if(isset($_SESSION['userID'])){
        require 'php/server.php';
        $user = $_SESSION['userName'];
        $sql = mysqli_query($conn, "SELECT * FROM register WHERE Uidusers = '$user' ");
        $row = mysqli_fetch_assoc($sql);
        if($_SESSION['userName'] == 'ADMIN'){
           echo "<p class='vote_text'>VOTED</p>";
           echo '<img class="tick" src="img/correct.png"/>';
           echo'<a class="nav-link" href="voting.php">Vote</a>';
         }
         else{
        if($row['status'] or $row['status1'] ==1){
          echo "<p class='vote_text'>VOTED</p>";
          echo '<img class="tick" src="img/correct.png"/>';
        }
        else{
          echo'<a class="nav-link" href="voting.php">Vote</a>';
        }
      }

      }
       ?>
       <li class="nav-item">
         <a class="nav-link" href="#">
           <?php
             if(isset($_SESSION['userID'])){
           require 'php/server.php';
             $user = $_SESSION['userName'];
           $sql = mysqli_query($conn, "SELECT * FROM register WHERE  Uidusers = '$user'");
           $rows = mysqli_fetch_assoc($sql);
           if($_SESSION['userName'] == 'ADMIN'){
             echo '<div >';
           echo '<img id="prof" src="./img/mai.png">';
             echo'</div>';
           }
           else{
           if($rows['imgstatus'] == 0){
             echo '<div >';
           echo '<img id="prof" src="./img/mai.png">';
             echo'</div>';
           }
           else
           {
              echo '<div>';
     echo '<img id="prof" src="./profile/'.$rows['image'].'">';
       echo'</div>';
   }
   }
 }
           ?>
        </a>
      </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <?php
        if(isset($_SESSION['userID'])){
          echo $_SESSION['userName'];
        }else{
          echo 'Signup/Login';
        }
         ?>
      </a>
      <div class="dropdown-menu">


        <?php
        if(isset($_SESSION['userID'])){
          echo '<a style="font-weight:bold;" class="dropdown-item" href="php/logout.php">LOGOUT</a>';
          echo '<a style="font-weight:bold;" class="dropdown-item" href="changeprofile.php">UPLOAD/CHANGE PROFILE IMAGE</a>';
          $user = $_SESSION['userName'];
          $sql = mysqli_query($conn, "SELECT * FROM register WHERE  Uidusers = '$user'");
          $row = mysqli_fetch_assoc($sql);
          if($_SESSION['userName'] == 'ADMIN'){
            echo '<a style="font-weight:bold;" class="dropdown-item" href="php/removeprof.php">REMOVE PROFILE PIC</a>';
          }
          else {
          if($row['imgstatus'] == 1){
          echo '<a style="font-weight:bold;" class="dropdown-item" href="php/removeprof.php">REMOVE PROFILE PIC</a>';
        }
      }
        }
        else{
          echo '<a style="font-weight:bold;" class="dropdown-item" href="signup.php">SIGNUP</a>';
          echo '<a style="font-weight:bold;" class="dropdown-item" href="login.php">LOGIN</a>';
        }
         ?>

      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="adminlogin.php">Admin</a>
    </li>
  </ul>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h1>VOTER POLL</h1>
      <div class="content">
        <p>VOTER POLL enables voters to cast their vote privately and easily from any location and on any device with Internet access (PC, tablet, smartphone, etc.), ensuring maximum election engagement by enabling remote and disabled voters to participate on equal terms.</p>
        <p>Voter privacy, election integrity, end-to-end security, vote correctness and full verifiability (individual and universal) are guaranteed. </p>
      </div>
    </div>
    <div class="col-sm-6">
      <p style="position:relative;top:85px;font-weight:bold;left:50px;">CONTACT US:</p>
      <div class="contact">

      <a href="https://www.linkedin.com/in/harshith-kumar-bb8947178/">  <img src="img/linkedin.png" alt="IN"></a>
      <a href="https://github.com/harshithkumar2"> <img src="img/github.png" alt="git"></a>
      <a href="https://www.instagram.com/harshithkumar2/?hl=en"><img src="img/instagram.png" alt="insta"></a>
      </div>
        <img src="img/voting.png" class="index_img" alt="vote">
        <div class="btn_content">
        <p style="color:white;font-size:19px;">New user?</p>
        <a href="signup.php"><button type="submit" id="button" class="btn btn-success">SIGN UP</button> </a>
      </div>
    </div>
  </div>
</div>
</body>
</html>
