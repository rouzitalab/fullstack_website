<!DOCTYPE html>
<html>
<head>
<link href="global.css" rel="stylesheet" type="text/css" >
</head>
<body style="">
<?php
if (isset($_COOKIE['c12c3'])){
	$name = $_COOKIE['d'];
	$name = (string)$name;
	$name = strtoupper($name);
	$entno = $_COOKIE['entno'];
	echo "<div style='color:#B0C0E0; width:600px; position:relative; left:10%; top:10px;'><img id='logo' style='width: 400px;' src='logo.png' /><br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; WELCOME, ".$name."<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You Have Entered ".$entno." Times.</div><br/><br/><div style='position:relative; left:21%;width:230px;text-align:center; border-style:solid; border-radius:1cm; background-color: #D070D0; font-style:none; font-weight:bold;'><a href='changepass.php'>Change Your Password</a></div><br/><div style='position:relative; left:21%;width:175px;text-align:center; border-style:solid; border-radius:1cm; background-color: #D070D0; font-style:none; font-weight:bold;'><a href='view.php'>Enter Database</a></div><br/><div style='width:100px; border-style:solid; border-radius:1cm; background-color: #D070D0; font-style:none; font-weight:bold;position:relative; left:21%;text-align:center;'><a href='logout.php'>Log Out</a></div>";
	}
else {
	echo "Not Logged In!";
	echo "<meta http-equiv=\"refresh\" content=\"3;login.php\"/>";
}
?>

</body>
</html>