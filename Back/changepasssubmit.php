<html>
<head>
<link href="global.css" rel="stylesheet" type="text/css" >
</head>
<body>

<?php
if (isset($_COOKIE['c12c3'])){
//$oldpass = $_GET["oldpass"];
$newpass = $_GET["newpass"];
$user = $_COOKIE['c12c3user'];
$umain = "a";
$pmain = "c12c3pass";
$umod1 = "c12c3m1";
$pmod1 = "passm1";
$umod2 = "c12c3m2";
$pmod2 = "passm2";
$uvis1 = "c12c3v1";
$pvis1 = "passv1";
$uvis2 = "c12c3v2";
$pvis2 = "passv2";
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Asia/Tehran');
$timezone = date_default_timezone_get();
$date = date('F j, Y, g:i a', time());
// $db = mysqli_connect("127.0.0.1", "root", "", "hw4") or die(mysqli_connect_error());
// $result = mysqli_query($db, "SELECT * FROM blogers WHERE user='$user'") or die(mysql_error($db));
// if (!($row = mysqli_fetch_assoc($result))){
//echo "you havn't registered";
// echo "Haven't Register Yet!";
// echo "<meta http-equiv=\"refresh\" content=\"3;register.php\"/>";
// }
$admin_email = "b@a.com";
$email = "D@a.com";
$subject = "User Logged In to Database";
//$comment = "User: ".$user." Logged In at ".$date." From IP: ". $ip;
  
  //send email
  //mail($admin_email, "$subject", $comment, "From:" . $email);
  
  
$db = mysqli_connect("127.0.0.1", "a", "a", "a") or die(mysqli_connect_error());
$result = mysqli_query($db, "SELECT * FROM people WHERE `user`='".$user."'") or die(mysqli_error($db));

//if ($oldpass==$row["pass"]){
// $type = $row["user-type"];
// $name = $row["name"];
// $entno = $row["ent-no"];
// setcookie("c12c3",$type);
// setcookie("editor",$name);
// setcookie("entno",$entno);
// $entnon = $entno + 1;
$result = mysqli_query($db, "UPDATE people SET `pass` = '".$newpass."' WHERE `user`='".$user."'") or die(mysqli_error($db));
echo "Password Changed Succesfully!";
echo "<meta http-equiv=\"refresh\" content=\"3;home.php\"/>";
//}
//else {
//	echo "The Old Password You Entered Is Incorrect!";
//	echo "<meta http-equiv=\"refresh\" content=\"3;changepass.php\"/>";
//}
  
  }
else {
	echo "Not Logged In!";
	echo "<meta http-equiv=\"refresh\" content=\"3;login.php\"/>";
}
?>

</body>
</html>