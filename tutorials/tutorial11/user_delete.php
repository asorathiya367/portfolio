<?php 
session_start();
require "db.php";

$id = (isset($_GET['id']))?$_GET['id']:0;

if($id!=0){
	$str = "delete from std_info where id=$id";
	$db->query($str);
}

header("location:index.php");

?>