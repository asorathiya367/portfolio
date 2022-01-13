<?php
/**
* Website: www.TutorialsClass.com
**/

if(!empty($_POST["rememberme"])) {
	setcookie ("username",$_POST["username"], time() + 3600);
	setcookie ("password",$_POST["password"], time() + 3600);
	echo "Cookies Set Successfuly";
} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}

?>

<p><a href="rememberme.php"> Go to Login Page </a> </p>