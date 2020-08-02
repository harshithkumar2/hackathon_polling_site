<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="forgot.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>forgot password</title>
  </head>
  <body>
    <div class="container">
      <h1>FORGOT/RESET PASSWORD</h1>
      <?php
      if(isset($_GET['error'])){
        if($_GET['error'] == 'emptyfields'){
          echo "<p style='color:red;text-align:center;'>EMPTY FIELDS</p>";
        }
        else if($_GET['error'] == 'passdinmatch'){
          echo "<p style='color:red;text-align:center;'>PASSWORD DID NOT MATCH</p>";
        }
        else if($_GET['error'] == 'bothwrong'){
          echo "<p style='color:red;text-align:center;'>EITHER USERNAME/E-MAIL ID ENTERED IS WRONG</p>";
        }
      }
       ?>
      <form  action="php/forgot_php.php" method="post">
      <div class="row">
        <div class="col-sm-12">
          <label>USERNAME:</label>
          <input type="text" class="form-control"name="user" placeholder="Enter your username:">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <label>E-Mail ID  :</label>
          <input type="text" class="form-control" name="mail" placeholder="Enter your E-mail ID:">
        </div>
      </div>
     <div class="row">
        <div class="col-sm-12">
          <label>NEW PASSWORD:</label>
          <input type="password" class="form-control" name="pass" placeholder="Enter new password:">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <label>Renter-PASSWORD:</label>
          <input type="password" class="form-control" name="repass" placeholder="Re-Enter new password:">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <button type="submit" class="btn btn-primary" name="forgot_submit" id="sub">UPDATE PASSWORD</button>
        </div>
        <div class="col-sm-6">
          <button type="reset" class="btn btn-primary"  id="sub">RESET</button>
        </div>
      </div>
      </form>
    </div>
  </body>
</html>
