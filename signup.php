<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="signup.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>REGISTRATION</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>REGISTRATION FORM</h1>
        </div>
      </div>
      <div class="personal_details">
        <h2>Personal Details</h2>
        <?php
        if(isset($_GET['error'])){
          if($_GET['error'] == 'emptyfields'){
            echo '<p style=" position:absolute; left:30%;font-weight:bold; color:red;">EMPTY FIELDS</p>';
          }
          elseif($_GET['error'] == 'invalidusername'){
            echo '<p style=" position:absolute; left:30%;font-weight:bold; color:red;">INVALID USERNAME</p>';
          }
          elseif($_GET['error'] == 'invalidemail'){
            echo '<p style=" position:absolute; left:30%;font-weight:bold; color:red;">INVALID EMAIL-ID</p>';
          }
          elseif($_GET['error'] == 'wrongpass'){
            echo '<p style=" position:absolute; left:30%;font-weight:bold; color:red;">INVALID PASSWORD</p>';
          }
          elseif($_GET['error'] == 'sqlerror'){
            echo '<p style=" position:absolute; left:30%;font-weight:bold; color:red;">ERROR</p>';
          }
          elseif($_GET['error'] == 'usertaken'){
            echo '<p style=" position:absolute; left:15%;font-weight:bold; color:red;">USERNAME ALREADY TAKEN</p>';
          }
          elseif($_GET['error'] == 'emailtaken'){
            echo '<p style=" position:absolute; left:23%;font-weight:bold; color:red;">E-Mail ALREADY USED</p>';
          }
        }
         ?>
        <form  action="php/register.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-6">
        <label>Name:</label>
        <input type="text" class="form-control"name="name" placeholder="Enter your name">
      </div>
      <div class="col-sm-6">
    <label>Profile image:</label>
      <input type="file" name="image" >
  </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
    <label>Email:</label>
    <input type="text"class="form-control" name="email" placeholder="Enter your Email ID">
  </div>
</div><br>
<div class="row">
  <div class="col-sm-12">
    <label>DOB:</label>
    <input type="date" name="dob" >
  </div>
</div><br>
<div class="row">
  <div class="col-sm-12">
    <label>Gender:</label>
    <select class="form-control" name="gender">
            <option>Male</option>
            <option>Female</option>
          </select>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <label>Phone No:</label>
    <input type="tel" class="form-control" name="phone" placeholder="Enter your Phone no">
  </div>
</div><br>
<h2>Login Details</h2>
<div class="row">
  <div class="col-sm-12">
<label>UserName:</label>
<input type="text"  class="form-control" name="user_name" placeholder="Enter your User Name">
</div>
</div>
<div class="row">
  <div class="col-sm-12">
<label>Password:</label>
<input type="password" class="form-control" name="pass" placeholder="Enter the password">
</div>
</div>
<div class="row">
  <div class="col-sm-12">
<label>ReEnter-Password:</label>
<input type="password" class="form-control" name="re_pass" placeholder="ReType password">
</div>
</div>
<div class="buttons">
  <button type="submit" name="register_submit" class="btn btn-success">Register</button>
  <button type="reset" name="register_reset" class="btn btn-primary">Reset</button>
</div>
</form>
      </div>
    </div>
  </body>
</html>
