<!DOCTYPE html>
<html>
<head>
<link href="global.css" rel="stylesheet" type="text/css" >
</head>
<body style="">
<?php
$umain = "a";
$umod1 = "b1";
$umod2 = "b2";
$uvis1 = "c1";
$uvis2 = "c2";
	//setcookie("blogger","",-1);
	if (isset($_COOKIE["c12c3"])){
	echo "<a href='home.php'><input type='button' value='Home'/></a><br/><br/>";
	echo "<div style='color:white; width:350px; position:relative; left:35%; top:100px;'><form action='changepasssubmit.php' method='GET'><fieldset><legend><em><b>Set a New Password</b></em></legend><b><br/><b>New Password: </b>&nbsp;&nbsp;&nbsp;<input type='text' name='newpass'/><br/><br/><br/><input type='submit' value='Change' />&nbsp;&nbsp;</fieldset></form></div>";	
	}
	else {
	echo "You're Not Logged In!";
	echo "<meta http-equiv=\"refresh\" content=\"3;login.php\"/>";
}
?>

</body>
</html>