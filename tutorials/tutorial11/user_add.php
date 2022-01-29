<?php

require('db.php');

session_start();

// echo "<pre>";
// print_r($_POST);
// echo "</pre";


    $basepath="img/";  
    $topath=$basepath.$_FILES['profile']['name'];
    $frompath=$_FILES['profile']['tmp_name'];

    move_uploaded_file($frompath, $topath);




$name= isset($_POST['name']) ? $_POST['name']:"";
$email= isset($_POST['email']) ? $_POST['email']:"";
$enroll_no= isset($_POST['enrollno']) ? $_POST['enrollno']:"";
$contact_no= isset($_POST['contactno']) ? $_POST['contactno']:"";

$profile= isset($_FILES['profile']) ? $_FILES['profile']['name']:"";


$sql="insert into std_info (name,email,enrollno,contactno,profile) values('$name','$email','$enroll_no','$contact_no','$profile')";

if($db->query($sql))
{
    $_SESSION['message']="Record Inserted";
}
else
{
    $_SESSION['message']="Insertion Failed";
}


header("location:index.php");

?>