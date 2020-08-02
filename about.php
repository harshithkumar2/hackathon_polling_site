<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="about.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>ABOUT</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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
    <h1>VOTER POLL</h1>
    <div class="content">
      <p>VOTER POLL enables voters to cast their vote privately and easily from any location and on any device with Internet access (PC, tablet, smartphone, etc.), ensuring maximum election engagement by enabling remote and disabled voters to participate on equal terms.</p>
      <p>Voter privacy, election integrity, end-to-end security, vote correctness and full verifiability (individual and universal) are guaranteed. </p>
    </div>
    </div>
  </div>
  </body>
</html>
