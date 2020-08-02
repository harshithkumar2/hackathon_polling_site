<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="login.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>LOGIN</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>SIGN IN</h1>
        </div>
      </div>
      <?php
      if(isset($_GET['error'])){
        if($_GET['error'] == 'emptyfields'){
          echo '<p style=" position:relative; left:35%;font-weight:bold; color:red;">EMPTY FIELDS</p>';
        }
        elseif($_GET['error'] == 'wrongpwd'){
          echo '<p style=" position:relative; left:35%;font-weight:bold; color:red;">INVALID PASSWORD</p>';
        }
        elseif($_GET['error'] == 'nouserfound'){
          echo '<p style=" position:relative; left:35%;font-weight:bold; color:red;">NO USER FOUND</p>';
        }
      }
       ?>
      <div class="logo">
        <img src="img/login.png" alt="login">
      </div>
      <form action="php/signin.php" method="post">
      <div class="content">
        <div class="row">
          <div class="col-sm-12">
            <img src="img/user.png" alt="user">
            <label>UserName:</label>
            <input type="text" name="login_name" class="form-control" placeholder="Enter your Username">

          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <img src="img/password.png" alt="user">
            <label>Password:</label>
            <input type="password"  id="pass" name="login_pass" class="form-control" placeholder="Enter the password">
          </div>
        </div>
        <input type="checkbox" onclick="show()"> Show password
        <a href="forgot_mail.php" style="float: right;">Forgot password?</a>
        <div class="login_btn">
          <button type="submit" name="login_submit" class="btn btn-success">Sign In</button>
        </div>
      </div>
      </form>
    </div>
    <script type="text/javascript">
    var  pass = document.getElementById('pass');
      function show(){
        if(pass.type == 'password'){
          pass.type = 'text';
        }
        else{
          pass.type = 'password';
        }
      }

    </script>
  </body>
</html>
