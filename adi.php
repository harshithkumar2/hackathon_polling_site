<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <link rel="icon" href="photos/logo.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
      ::placeholder{
          color:whitesmoke;
          font-weight:bold
      }
.names{
    background:transparent;
    outline:0;
    border:none;
    border-bottom:solid 2px black;
    width:350px;
    text-align:center;
    font-style:italic;
    font-size:20px;

}
.pass{
    background:transparent;
    outline:0;
    border:none;
    border-bottom:solid 2px black;
    width:350px;
    text-align:center;
    font-style:italic;
    font-size:20px;

}
.heading{
    color: black;
    position: relative;
    top:35px;
    text-align: center;
    font-size: 30px;
    font-weight: bold;
    font-style: oblique;
    font-family:Helvetica Narrow, sans-serif;
    color:whitesmoke;
}
      </style>
 </head>

<body style="background:url(photos/lgimg.jpg)no-repeat;background-position:center;background-size:cover;">

<form action="adiphp.php" method="POST">

<div class="container"  style=" width:550px;height:550px;border:solid 2px black;border-radius:40px;-webkit-box-shadow:-1px 4px 26px 11px black;-maz-box-shadow:-10px 4px 26px 15px  black;
box-shadow:  -1px 3px 26px 18px  black;margin-top:60px;background:url(photos/lgimg2.jpg)no-repeat;background-position: center;background-size: cover;">

    <div class="row">
        <div class="col-sm-12">
            <p class="heading">Sign In To Account</p><br>
            <hr style="border-bottom:solid 2.5px whitesmoke;width:500px;box-shadow:1px 3px 3px whitesmoke">
        </div>
    </div>
<br><br>

    <div class="row" style="margin-left:50px">
       <div class="col-sm-12">
           <img src="photos/person.png">&nbsp;&nbsp;
           <input type="text" class="names" placeholder="User Name" name="uid">
        </div>
    </div>
<br>
<br>

    <div class="row"  style="margin-left:50px">
<div class="col-sm-12">
   <img src="photos/password.png">&nbsp;&nbsp;
           <input type="password" class="pass" placeholder=" Password"  name="pwd">
        </div>
    </div>
<br>


    <div class="row"  style="margin-left:50px">
        <div class="col-sm-7">
         <input type="checkbox">&nbsp;&nbsp;<label style="font-style:italic;  color:whitesmoke;font-size:18px;font-weight:bold">Remember Me</label>
        </div>
        <div class="col-sm-5">
            <a href="forgot.php" style="text-decoration:none;color:black;font-style:italic; color:whitesmoke;font-size:18px;font-weight:bold">Forgot Password</a>
        </div>
    </div>
<br>

    <div class="row">
        <div class="col-sm-12">
        <input type="submit" value="Login" class="btn btn-dark" name="login" style="width:200px;height:40px;position:relative;left:150px;border-radius:30px">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
        <a href="sign.php" style="text-decoration:none;color:black;font-style:italic;position:relative;top:40px; color:whitesmoke;font-size:18px;font-weight:bold">New User?Sign Up Now</a>
        </div>
    </div>
</div>
</form>
</body>
<html>
