<!DOCTYPE html>
<html>
<head>
<link href="global.css" rel="stylesheet" type="text/css" >
</head>
<body style="">
<?php
	//setcookie("blogger","",-1);
	if (isset($_COOKIE["c12c3"])){
	setcookie("c12c3", "", time() - 3600);
	setcookie("c12c3user", "", time() - 3600);
	setcookie("editor", "", time() - 3600);
	setcookie("entno", "", time() - 3600);
	echo "You're Logged Out!";
	}
	echo "<meta http-equiv=\"refresh\" content=\"3;login.php\"/>";
?>

</body>
</html>