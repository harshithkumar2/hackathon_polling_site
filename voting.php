<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="voting.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title>voting</title>
  </head>
  <body><nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="index.php">VOTER POLL</a>

<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="#">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="team.php">Team</a>
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
      }
      else{
        echo '<a style="font-weight:bold;" class="dropdown-item" href="signup.php">SIGNUP</a>';
        echo '<a style="font-weight:bold;" class="dropdown-item" href="login.php">LOGIN</a>';
      }
       ?>

    </div>
  </li>
</ul>
</nav>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <form  class="candidates" action="php/vote.php" method="post">
          <h2>CANDIDATE 1</h2>
          <img class="candidate_img"src="img/mai.png" alt="user1"><br>
          <button class="btn btn-primary" type="submit" name="vote">Vote</button>

        </form>
      </div>
      <div class="col-sm-6">
        <form class="candidates" action="php/vote2.php" method="post">
          <h2>CANDIDATE 2</h2>
          <img class="candidate_img"src="img/mai.png" alt="user1"><br>
          <button class="btn btn-primary" type="submit" name="vote2">vote</button>
        </form>
      </div>
    </div>
  </div>

  </body>
</html>
