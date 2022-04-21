<html>
<head>
<link href="global.css" rel="stylesheet" type="text/css" >
</head>
<body>

<?php
if (isset($_COOKIE['c12c3'])){
	
//$oldpass = $_GET["oldpass"];
$user = $_GET["user"];
$name = $_GET["name"];
$pass = $_GET["pass"];
$type = $_GET["type"];
$umain = "c12c3c33";
		if ($_COOKIE['c12c3']==$umain) {
$pmain = "c12c3pass";
$umod1 = "b1";
$pmod1 = "pb1";
$umod2 = "b2";
$pmod2 = "pb2";
$uvis1 = "c1";
$pvis1 = "cp1";
$uvis2 = "c2";
$pvis2 = "cp2";
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Asia/Tehran');
$timezone = date_default_timezone_get();
$date = date('F j, Y, g:i a', time());
$admin_email = "b@c12c3.com";
$email = "D@c12c3.com";
$subject = "User Logged In to Database";
//$comment = "User: ".$user." Logged In at ".$date." From IP: ". $ip;
  
  //send email
  //mail($admin_email, "$subject", $comment, "From:" . $email);
  
  $no = 1;
$db = mysqli_connect("127.0.0.1", "c12c3c33", "c12c3c33", "c12c3c33") or die(mysqli_connect_error());
	$result = mysqli_query($db, "INSERT INTO people(`user`,`pass`,`name`,`user-type`,`ent-no`) VALUES('$user','$pass','$name','$type','$no');") or die(mysqli_error($db));

//if ($oldpass==$row["pass"]){
// $type = $row["user-type"];
// $name = $row["name"];
// $entno = $row["ent-no"];
// setcookie("c12c3",$type);
// setcookie("editor",$name);
// setcookie("entno",$entno);
// $entnon = $entno + 1;
echo "New User Added Succesfully!";
echo "<meta http-equiv=\"refresh\" content=\"3;adduser.php\"/>";
//}
//else {
//	echo "The Old Password You Entered Is Incorrect!";
//	echo "<meta http-equiv=\"refresh\" content=\"3;changepass.php\"/>";
//}
  
  }
else {
			echo "You Can Not Add New User!";
			echo "<meta http-equiv=\"refresh\" content=\"5;home.php\"/>";
		}
		}
	else {
		echo "You Are Not Logged!";
		echo "<meta http-equiv=\"refresh\" content=\"5;login.php\"/>";
	}
?>

</body>
</html>