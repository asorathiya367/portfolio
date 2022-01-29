<?php

$db=new mysqli('localhost','root','','student');

	if($db -> connect_errno)
	{
		echo $db ->connect_error;
		exit;
	}
?>