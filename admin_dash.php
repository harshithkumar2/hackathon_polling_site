<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin_dash.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Dashboard</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php
          if($_SESSION['userName'] =='ADMIN'){
          require 'php/server.php';
          $sql = mysqli_query($conn, "SELECT * FROM register");
          if(mysqli_num_rows($sql) > 0){
            echo "<table><tr><th>REGISTERED USERS</th>";
            while($row = mysqli_fetch_assoc($sql)){
              echo "<tr><td>".$row['Uidusers']."</td></tr>";
            }
          }
          echo "<br>";
          $sql = mysqli_query($conn, "SELECT * FROM register WHERE status = 1");
          if(mysqli_num_rows($sql) > 0){
            echo "<th>CANDIDATE 1 VOTERS NAMES</th>";
            while($row = mysqli_fetch_assoc($sql)){
              echo "<tr><td>".$row['Uidusers']."</td></tr>";
            }
          }
          $sql = mysqli_query($conn, "SELECT * FROM register WHERE status1 = 1");
          if(mysqli_num_rows($sql) > 0){
            echo "<th>CANDIDATE 2 VOTERS NAMES</th></tr>";
            while($row = mysqli_fetch_assoc($sql)){
            echo "<tr><td>".$row['Uidusers']."</td></tr>";
            }

          }
          $sql = mysqli_query($conn, "SELECT COUNT(Name) as 'tot' FROM register");
            $row = mysqli_fetch_assoc($sql);
            echo "<h2 class='total'>TOTAL  CANDIDATES REGISTERED:".$row['tot']."</h2>";

            $sql = mysqli_query($conn, "SELECT SUM(status) as 'tot' FROM register");
              $row = mysqli_fetch_assoc($sql);
              echo "<h2 class='total'>TOTAL CANDIDATE 1 VOTES:".$row['tot']."</h2>";

            $sql = mysqli_query($conn, "SELECT SUM(status1) as 'tot' FROM register");
              $row = mysqli_fetch_assoc($sql);
              echo "<h2 class='total'>TOTAL CANDIDATE 2 VOTES:".$row['tot']."</h2>";
}
else{
  header('location: ./index.php');
  exit();
}

           ?>
        </div>
      </div>
    </div>
  </body>
</html>
