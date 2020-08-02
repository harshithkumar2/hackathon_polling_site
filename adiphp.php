<?php
if(isset($_POST['login']))
{
    require 'php/server.php';
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

    if(empty($uid) || empty($pwd))
    {
        header("Location: ./adi.php?error=emptyfields");
        exit();

    }

    else
    {
        $sql="SELECT * FROM register WHERE Uidusers='$uid'";
        $conne=mysqli_query($conn,$sql);
        if(mysqli_num_rows($conne)==1)
        {
            $server=mysqli_query($conn,"SELECT * FROM register WHERE Uidusers='$uid'");
            $row=mysqli_fetch_assoc($server);
            $connect=password_verify($pwd,$row['Pwdusers']);
            print_r($connect);

        }
        }
    }
