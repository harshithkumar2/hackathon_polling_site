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
    <title></title>
  </head>
  <body>
    <form  action="php/imagephp.php" method="post" enctype="multipart/form-data">
      <input type="file" name="image" >
      <button type="submit" name="upload_btn">upload</button>
    </form>

    <?php
    require 'php/server.php';
    $sql = mysqli_query($conn, "SELECT * FROM total");
    while($row = mysqli_fetch_assoc($sql)){
echo "<img src='./img/".$row['image']."'/>";
    }
     ?>
   </li>
   <!--<li class="nav-item">
     <a class="nav-link" href="#">
       <?php
       require 'php/server.php';
       $sql = mysqli_query($conn, "SELECT * FROM total");
       while($row = mysqli_fetch_assoc($sql)){
   echo '<div >';
 echo '<img id="prof" src="./img/'.$row['image'].'">';
   echo'</div>';
       }
        ?>
     </a>
   </li> -->
  </body>
</html>
