<?php
$umain = "a";
$umod1 = "b1";
$umod2 = "b2";
$uvis1 = "c1";
$uvis2 = "c2";
if (isset($_COOKIE['c12c3'])){
	if($_COOKIE['c12c3']==$umain ||$_COOKIE['c12c3']==$umod1 || $_COOKIE['c12c3']==$umod2){
	 $no = $_POST['no'];
	 $db = mysqli_connect("127.0.0.1", "a", "a", "a") or die(mysqli_connect_error());
	 $query = mysqli_query($db, "SELECT * FROM report WHERE `no`='".$no."'") or die(mysql_error($db));     // mysql_select_db(DATABASE) or die(mysql_error());
	// // if (mysqli_num_rows($query) == 0){
		// // echo '0';
	// // }
	// // else {
	$row = mysqli_fetch_array($query);
	$array = array($row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14],$row[15],$row[16],$row[17],$row[18],$row[19],$row[20],$row[21],$row[22],$row[23],$row[24],$row[25],$row[26],$row[27],$row[28],$row[29],$row[30],$row[31],$row[32],$row[33],$row[34],$row[35],$row[36],$row[37],$row[38],$row[39],$row[40],$row[41]);
    echo json_encode($array);
	}
	else {
		echo "You Can Not Edit!";
		echo "<meta http-equiv=\"refresh\" content=\"3;view.php\"/>";
	}
}
else {
	echo "You're Not Logged In!";
	echo "<meta http-equiv=\"refresh\" content=\"3;login.php\"/>";
}
	// }

	 
	 

?>