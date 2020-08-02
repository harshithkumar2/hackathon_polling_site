<?php
if(isset($_POST['send'])){
  $user = $_POST['user'];
  $email = $_POST['mail'];
  $subject = "REQUEST TO CHANGE PASSWORD";
  $msg = "click this link to change password:http://localhost/Hackathon/forgot.php ";
  if(mail($email, $subject,$msg )){
    echo '<script>
    swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});
</script>';
}
  else {
    echo "failed";
  }
}
 ?>
