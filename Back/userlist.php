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

if (isset($_COOKIE['c12c3'])){
	$db = mysqli_connect("127.0.0.1", "a", "a", "a") or die(mysqli_connect_error());
	$result = mysqli_query($db, "SELECT * FROM people") or die(mysqli_error($db));
	
	if ($_COOKIE['c12c3']== $umain ){
		echo "<a href='view.php'><input type='button' value='View Table'/></a>&nbsp;&nbsp;";
		echo "<a href='adduser.php'><input type='button' value='New User'/></a>&nbsp;&nbsp;";
		echo "<a href='new_miel.php'><input type='button' value='New miel'/></a>&nbsp;&nbsp;";
		echo "<a href='search.php'><input type='button' value='Search'/></a>";
		echo "<span class = 'righty'>  <a href='home.php'><input type='button' value='Home'/></a></span><br/><br/>";
  		echo "<br/><br/></br><table>";
   		echo "<tr><th>#</th><th>Name</th><th>Username</th><th>Type</th></tr>";
   		//echo "</table>";
		//echo "<table style='margin-top:25px;'>";
		$no = 1;
		while($row = mysqli_fetch_array($result))
         {
			echo "<tr><td>" . $no . "</td><td>" . $row['name'] . "</td><td>" . $row['user'] . "</td><td>" . $row['user-type'] . "</td></tr>";
			 $no++;
         }
 		echo "</table>";
 		mysqli_close($db);

	}
else {
	echo "You Can't View User List!";
	echo "<meta http-equiv=\"refresh\" content=\"3;home.php\"/>";
}
	

}

else {
	echo "Not Logged In!";
	echo "<meta http-equiv=\"refresh\" content=\"3;login.php\"/>";
}
?>

</body>
</html>