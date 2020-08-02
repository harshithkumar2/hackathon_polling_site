<?php
if(isset($_POST['send'])){
  $user = $_POST['user'];
  $email = $_POST['mail'];
  $subject = "REQUEST TO CHANGE PASSWORD";
  $msg = "click this link to change password:http://localhost/Hackathon/forgot.php ";
  if(mail($email, $subject,$msg )){
echo'<script>
    alert("MAIL SENT SUCCESSFULLY! CHECK YOUR MAIL");
    window.location.href ="../login.php";
        </script>';
        exit();
      }
  else {
    echo "failed";
  }
}
 ?>
