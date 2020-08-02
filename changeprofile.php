<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="changeprofile.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>change profile image</title>
  </head>
  <body>
    <div class="container">
      <div class="image_up">
        <h4>CHANGE/UPLOAD PROFILE PIC </h4>
      <form action="php/changeprof.php" method="post" enctype="multipart/form-data">
        <input type="file" name="prof_img" id="prof_img">
        <button type="submit" class="btn btn-success" name="prof_submit">upload</button>
      </form>
      </div>
    </div>
  </body>
</html>
