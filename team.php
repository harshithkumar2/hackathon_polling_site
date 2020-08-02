<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="team.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Team</title>
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
      <u><h1>OUR TEAM</h1></u>
        <div class="cont">
          <img src="img/user.jpg" alt="logo" class="image">
          <div class="sub">
            <h4>HARSHITH KUMAR</h4>
          <a href="https://www.instagram.com/harshithkumar2/?hl=en"><img src="img/instagram.png" alt="insta"></a>
          <a href="https://www.linkedin.com/in/harshith-kumar-bb8947178/"><img src="img/linkedin.png" alt="link"></a>
          <a href="https://github.com/harshithkumar2"><img src="img/github.png" alt="git"></a>
          </div>
        </div>
        <div class="cont">
          <img src="img/adithya.jpg" alt="logo" class="image">
          <div class="sub">
            <h4>ADITHYA L</h4>
          <a href="https://www.instagram.com/adithya_l_/"><img src="img/instagram.png" alt="insta"></a>
          <a href="https://www.linkedin.com/in/adithya-l-7618241a9/"><img src="img/linkedin.png" alt="link"></a>
          <a href="https://github.com/adithyal-21"><img src="img/github.png" alt="git"></a>
          </div>
        </div>
        <div class="cont">
          <img src="img/kau.jpg" alt="logo" class="image">
          <div class="sub">
            <h4>K KAUSHIK</h4>
          <a href="https://www.instagram.com/kaushik13k/?hl=en"><img src="img/instagram.png" alt="insta"></a>
          <a href="https://www.linkedin.com/in/k-kaushik-a49133174"><img src="img/linkedin.png" alt="link"></a>
          <a href="https://github.com/Kaushik13k"><img src="img/github.png" alt="git"></a>
          </div>
        </div>
        <div class="cont">
          <img src="img/ashitha.jpg" alt="logo" class="image">
          <div class="sub">
            <h4>ASHITHA K</h4>
          <a href="https://instagram.com/ashii_bhat?igshid=jkba0uuxzys1"><img src="img/instagram.png" alt="insta"></a>
          <a href="https://www.linkedin.com/in/ashitha-k-2b0a761b2"><img src="img/linkedin.png" alt="link"></a>
          <a href="https://github.com/AshithaK26"><img src="img/github.png" alt="git"></a>
          </div>
        </div>


    </div>
  </body>
</html>
