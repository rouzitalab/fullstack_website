<!DOCTYPE html>
<html>
<head>
<link href="global.css" rel="stylesheet" type="text/css" >
</head>
<body style="">
<?php
	//setcookie("blogger","",-1);
	if (!isset($_COOKIE["c12c3"]))
	echo "<div style='color:white; width:350px; position:relative; left:35%; top:100px;'><form action='logincheck.php' method='GET'><fieldset><legend><em><b>Login Form</b></em></legend><b><br/>User Name: </b>&nbsp;&nbsp;<input type='text' name='user'/><br/><br/><b>Password: </b>&nbsp;&nbsp;&nbsp;<input type='password' name='pass'/><br/><br/><br/><input type='submit' value='Login' />&nbsp;&nbsp;</fieldset></form></div>";	
	else {
	echo "You're Logged In!";
	echo "<meta http-equiv=\"refresh\" content=\"3;view.php\"/>";
}
?>

</body>
</html>