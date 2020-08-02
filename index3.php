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
        Signup/Login
      </a>
      <div class="dropdown-menu">

        <a style="font-weight:bold;" class="dropdown-item" href="signup.php">SIGNUP</a>
        <a style="font-weight:bold;" class="dropdown-item" href="login.php">LOGIN</a>

      </div>
    </li>
  </ul>
</nav>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <div class="step">
            <h1>Step:1</h1>
            <h5>Create a new user account</h5>
          </div>
          <div class="step">
            <h1>Step:2</h1>
            <h5>Sign in To the account</h5>
          </div>
          <div class="step">
            <h1>Step:3</h1>
            <h5>Vote the candidate you want</h5>
          </div>

        </div>
        <div class="col-sm-6">
          <div class="log">
          <h1>LOG IN</h1>
      <?php
      if(isset($_GET['error'])){
        if($_GET['error'] == 'emptyfields'){
          echo '<p style=" position:absolute; left:22%;top:143px;font-weight:bold; color:red;">EMPTY FIELDS</p>';
        }
        elseif($_GET['error'] == 'wrongpwd'){
          echo '<p style=" position:absolute; left:22%;top:143px;font-weight:bold; color:red;">INVALID PASSWORD</p>';
        }
        elseif($_GET['error'] == 'nouserfound'){
          echo '<p style=" position:absolute; left:22%;top:143px;font-weight:bold; color:red;">NO USER FOUND</p>';
        }
      }
       ?>


      <div class="logo">
        <img src="img/login.png" alt="login">
      </div>
      <form action="php/insignin.php" method="post">
      <div class="content">
        <div class="row">
          <div class="col-sm-12">
            <label>UserName:</label>
            <input type="text" name="login_name" class="form-control" placeholder="Enter your Username">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <label>Password:</label>
            <input type="password" name="login_pass" class="form-control" placeholder="Enter the password">
          </div>
        </div><br>
        <div class="login_btn">
          <button type="submit" name="login_submit" class="btn btn-success">Sign In</button>
        </div>
        <p><a href="signup.php">New User? Click here to Sign Up</a></p>
      </div>
      </form>
    </div>
  </div>
</div>
</div>

  </body>
</html>
