<?php
session_start();
require 'server.php';
$user = $_SESSION['userName'];
$sql = mysqli_query($conn, "UPDATE register SET imgstatus = 0 WHERE Uidusers='$user'");
echo'<script>
alert("Profile pic removed successfully");
window.location.href = "../index.php";
</script>';
$sql2 = mysqli_query($conn, "SELECT * FROM register WHERE Uidusers='$user'");
$row = mysqli_fetch_assoc($sql2);
unlink("../profile/".$row['image']);
exit();
 ?>
