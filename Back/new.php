<html>
<head>
<script src="jquery-1.6.2.min.js"></script>
<link href="global.css" rel="stylesheet" type="text/css" >
<script src="jquery-1.6.2.min.js"></script>

</head>
<body style="">
<?php
$umain = "a";
$umod1 = "b1";
$umod2 = "b2";
$uvis1 = "c1";
$uvis2 = "c2";

if (isset($_COOKIE['c12c3'])){
	if ($_COOKIE['c12c3']==$umain) {
		
		echo "<a href='view.php'><input type='button' value='View Table'/></a>&nbsp;&nbsp;";
		echo "<a href='userlist.php'><input type='button' value='User List'/></a>&nbsp;&nbsp;";
		echo "<a href='search.php'><input type='button' value='Search'/></a>";
		echo "<span class = 'righty'>  <a href='home.php'><input type='button' value='Home'/></a></span><br/><br/>";
  	}
	elseif ($_COOKIE['c12c3']==$umod1||$_COOKIE['c12c3']==$umod2){
		echo "<a href='view.php'><input type='button' value='View Table'/></a>&nbsp;&nbsp;";
		echo "<a href='search.php'><input type='button' value='Search'/></a>";
		echo "<span class = 'righty'>  <a href='home.php'><input type='button' value='Home'/></a></span><br/><br/>";
  	}
	else {
		echo "You Don't Have Access to This Page!";
		echo "<meta http-equiv=\"refresh\" content=\"3;view.php\"/>";
	}
}
else {
	echo "You're Not Logged In!";
	echo "<meta http-equiv=\"refresh\" content=\"3;login.php\"/>";
}
?>
</body>
<script>
function  duplicatemiel() {var fname = document.getElementById("fname").value;
	   jQuery.ajax({
            type: 'POST',
            url: 'mielexists.php',
            data: 'fname='+fname,
            cache: false,
            success: function(response){
                if(response == 0){
                   document.getElementById("duplicatestatus").innerHTML=("It's New!");
                   document.getElementById("fname").style.backgroundColor = 'green';
                }
                else {
                   document.getElementById("duplicatestatus").innerHTML=("Already Added");
                   document.getElementById("fname").style.backgroundColor = 'red';
                     }
                     }
                     
                     });
               
}
</script>
</html>