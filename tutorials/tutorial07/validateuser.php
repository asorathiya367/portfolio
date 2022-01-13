<?php


// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

    session_start();
    $_SESSION['username']=$_POST['email'];
    $_SESSION['password']=$_POST['password'];
    $_SESSION['age']=$_POST['age'];
    $_SESSION['dob']=$_POST['dob'];
    $_SESSION['country']=$_POST['country'];
    $_SESSION['state']=$_POST['state'];
    $_SESSION['city']=$_POST['city'];
    $_SESSION['file']=$_POST['file'];
    $_SESSION['note']=$_POST['notes'];


    echo '<script type="text/javascript"> window.open("login.php","_self");</script>';
?>