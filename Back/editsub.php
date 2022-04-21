<html>
<head>
<link href="global.css" rel="stylesheet" type="text/css" >
</head>
<body>

<?php

$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Asia/Tehran');
$timezone = date_default_timezone_get();
$date = date('F j, Y, g:i a', time());

$umain = "a";
$umod1 = "b1";
$umod2 = "b2";

if (isset($_COOKIE['c12c3'])){
	if ($_COOKIE['c12c3']==$umain) {
		if (isset($_POST['edit'])) {
        # Publish-button was clicked
    
		$admin_email = "br@a.com";
		$email = "briu@a.com";
		$subject = "User Edited Databr";
		//$comment = "User: ".$user." Edited miel: ".$fname." at ".$date." From IP: ". $ip;
  		//mail($admin_email, "$subject", $comment, "From:" . $email);

// date_default_timezone_set('Asia/Tehran');
// $timezone = date_default_timezone_get();
// $date = date('F j, Y, g:i a', time());
$db = mysqli_connect("127.0.0.1", "a", "a", "a") or die(mysqli_connect_error());
	// $queryblog = mysqli_query($db, "SELECT * FROM posts WHERE blogad = '$blogad'");
	// $numofposts = mysqli_num_rows($queryblog);
	// $resultblog = mysqli_query($db,"UPDATE blogs SET numofposts='$numofposts' WHERE blogad='$blogad'");
// }
// else {
	// echo "Post with this Tiltle Exists Already!";
	// echo "<meta http-equiv=\"refresh\" content=\"5;new_post.php\"/>";
	// exit();
// }
	mysqli_close($db);
	echo "miel Edited!";
	echo "<meta http-equiv=\"refresh\" content=\"5;view.php\"/>";
	}
	 elseif (isset($_POST['delete'])) {
$db = mysqli_connect("127.0.0.1", "a", "a", "a") or die(mysqli_connect_error());
// $blogadquery = mysqli_query($db, "SELECT * FROM blogs WHERE blogid='$blogid'") or die(mysql_error($db));
// $blogadrow = mysqli_fetch_array($blogadquery);
// $blogad = $blogadrow['blogad'];
// $query = mysqli_query($db, "SELECT * FROM report") or die(mysql_error($db));
// if (mysqli_num_rows($query) == 0){
	 // $rowSQL = mysqli_query($db, "SELECT MAX( no ) AS max FROM report" );
	 // $row = mysqli_fetch_array($rowSQL);
	 // $largestNumber = $row['max'];
	 //,`comment` = '".$comment."'
//	 $no = $largestNumber + 1;
	$rowSQL = mysqli_query($db, "SELECT * FROM report WHERE `f-name`='".$fname."';") or die(mysqli_error($db));
	$row = mysqli_fetch_array($rowSQL);
	$refno = $row['no'];
	$result = mysqli_query($db, "DELETE FROM report WHERE `f-name`='".$fname."';") or die(mysql_error($db));
	$toup = mysqli_query($db, "SELECT * FROM report WHERE `no`>".$refno.";") or die(mysqli_error($db));
	
		while($rowtoup=mysqli_fetch_array($toup)){
		//	echo "To Up: ".$rowtoup['f-name'];
			$targetno = $rowtoup['no'];
			$no = $targetno - 1;
		//	echo " ".$targetno."<br/>";
			$query = mysqli_query($db, "UPDATE report SET `no` = '".$no."' WHERE no='".$targetno."';") or die(mysqli_error($db));
			
					}
	
	// $queryblog = mysqli_query($db, "SELECT * FROM posts WHERE blogad = '$blogad'");
	// $numofposts = mysqli_num_rows($queryblog);
	// $resultblog = mysqli_query($db,"UPDATE blogs SET numofposts='$numofposts' WHERE blogad='$blogad'");
// }
// else {
	// echo "Post with this Tiltle Exists Already!";
	// echo "<meta http-equiv=\"refresh\" content=\"5;new_post.php\"/>";
	// exit();
// }
	mysqli_close($db);
//	echo "id: ".$refno." hast!"; 
	echo "miel Deleted!";
	echo "<meta http-equiv=\"refresh\" content=\"5;view.php\"/>";
	}
	    
	}
	elseif ($_COOKIE['c12c3']==$umod1 || $_COOKIE['c12c3']==$umod2) {
		$admin_email = "br@a.com";
		$email = "briu@a.com";
		$subject = "User Edited Databr";
		//$comment = "User: ".$user." Edited miel: ".$fname." at ".$date." From IP: ". $ip;
  		//mail($admin_email, "$subject", $comment, "From:" . $email);

// date_default_timezone_set('Asia/Tehran');
// $timezone = date_default_timezone_get();
// $date = date('F j, Y, g:i a', time());
$db = mysqli_connect("127.0.0.1", "a", "a", "a") or die(mysqli_connect_error());
// $queryblog = mysqli_query($db, "SELECT * FROM posts WHERE blogad = '$blogad'");
	// $numofposts = mysqli_num_rows($queryblog);
	// $resultblog = mysqli_query($db,"UPDATE blogs SET numofposts='$numofposts' WHERE blogad='$blogad'");
// }
// else {
	// echo "Post with this Tiltle Exists Already!";
	// echo "<meta http-equiv=\"refresh\" content=\"5;new_post.php\"/>";
	// exit();
// }
	mysqli_close($db);
	echo "miel Edited!";
	echo "<meta http-equiv=\"refresh\" content=\"5;view.php\"/>";
	}
	else {
		echo "You Can Not Edit miels!";
		echo "<meta http-equiv=\"refresh\" content=\"5;view.php\"/>";
	}
	
}
else {
	echo "You Are Not Logged!";
	echo "<meta http-equiv=\"refresh\" content=\"5;login.php\"/>";
}
?>
</body>
</html>