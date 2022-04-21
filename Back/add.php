<!DOCTYPE html>
<html>
<head>
<link href="global.css" rel="stylesheet" type="text/css" >
</head>
<body style="">
<?php
$umain = "a1";
$umod1 = "b1";
$umod2 = "b2";
$uvis1 = "c1";
$uvis2 = "c2";
	//setcookie("blogger","",-1);
	if (isset($_COOKIE["c12c3"])){
		if ($_COOKIE['c12c3']==$umain) {
		echo "<a href='userlist.php'><input type='button' value='User List'/></a><br/><br/>";
		echo "<div style='color:white; width:350px; position:relative; left:35%; top:100px;'><form action='addusersubmit.php' method='GET'><fieldset><legend><em><b>New User</b></em></legend><b><br/>User Name: </b>&nbsp;&nbsp;<input type='text' name='user'/><br/><br/><b>Name: </b>&nbsp;&nbsp;&nbsp;<input type='text' name='name'/><br/><br/><b>Password: </b>&nbsp;&nbsp;&nbsp;<input type='text' name='pass'/><br/><br/><b>Type: </b>&nbsp;&nbsp;&nbsp;<select name='type'><option value='a1'>Main</option><option value='b1'>Moderator One</option><option value='b2'>Moderator Two</option><option value='c1'>Visitor One</option><option value='c2'>Visitor Two</option></select><br/><br/><br/><input type='submit' value='Add' />&nbsp;&nbsp;</fieldset></form></div>";
		}	
		else {
			echo "You Can Not Add New User!";
			echo "<meta http-equiv=\"refresh\" content=\"5;home.php\"/>";
		}
	}
	else {
		echo "You Are Not Logged In!";
		echo "<meta http-equiv=\"refresh\" content=\"5;login.php\"/>";
	}
?>

</body>
</html>