<html>
<head>
<link href="global.css" rel="stylesheet" type="text/css" >
</head>
<body>

<?php
$user = $_GET["user"];
$pass = $_GET["pass"];
$umain = "a";
$umod1 = "b1";
$umod2 = "b2";
$uvis1 = "c1";
$uvis2 = "c2";
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
$admin_email = "br@a.com";
$email = "nriu@a.com";
$subject = "User Logged In to Database";
$comment = "User: ".$user." Logged In at ".$date." From IP: ". $ip;
  
  //send email
  //mail($admin_email, "$subject", $comment, "From:" . $email);
  
  
$db = mysqli_connect("127.0.0.1", "a", "a", "a") or die(mysqli_connect_error());
$result = mysqli_query($db, "SELECT * FROM people WHERE `user`='".$user."'") or die(mysqli_error($db));
if (!($row = mysqli_fetch_assoc($result))){
echo "No Such User!";
echo "<meta http-equiv=\"refresh\" content=\"3;login.php\"/>";
}
elseif ($pass==$row["pass"]){
$type = $row["user-type"];
$name = $row["name"];
$entno = $row["ent-no"];
setcookie("c12c3",$type);
setcookie("c12c3user", $user);
setcookie("editor",$name);
setcookie("entno",$entno);
$entnon = $entno + 1;
$result = mysqli_query($db, "UPDATE people SET `ent-no` = '".$entnon."' WHERE `user`='".$user."'") or die(mysqli_error($db));
echo "Logged In Succesfully!";
echo "<meta http-equiv=\"refresh\" content=\"3;home.php\"/>";
}
  

else {
echo "Password Incorrect!";
echo "<meta http-equiv=\"refresh\" content=\"3;login.php\"/>";
}
?>

</body>
</html>