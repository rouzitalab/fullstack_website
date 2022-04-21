<html>
<head>
<script src="jquery-1.6.2.min.js"></script>
<link href="global.css" rel="stylesheet" type="text/css" >

</head>
<body onload="afm()">
<?php
$umain = "a";
$umod1 = "b1";
$umod2 = "b2";
$uvis1 = "c1";
$uvis2 = "c2";


//echo $no;
?>
</body>
<script>
function  afm() {
	//var no = num;
	//document.getElementById("0").value = ;

// //alert(no);
	    // jQuery.ajax({
             // type: 'POST',
             // url: 'editmovieexists.php',
             // data: 'no='+no,
           // dataType: 'json',
             // cache: false,
             // success: function(result){
		// //	alert(result[0]);
			// //alert(result[1]);
		// //	alert(result[2]);
		// //	alert(result[40]);
            	// // // if (result){
            		// // resultObj = eval (result);
            		// // // alert (resultObj);
            	// // // }
            	// // // else{
            		// // // alert("error");
            	// // // }
            	// // jq_json_obj = $.parseJSON(result); //Convert the JSON object to jQuery-compatible
// // 
      // // if(typeof jq_json_obj == 'object'){ //Test if variable is a [JSON] object
        // // jq_obj = eval (jq_json_obj); 
// // 
        // // //Convert back to an array
        // // jq_array = [];
        // // for(elem in jq_obj){
            // // jq_array.push(jq_obj[elem]);
        // // }
        // // alert(jq_array);
      // // }else{
        // // alert("Error occurred!"); 
                // // if(response == 0){
                   // // document.getElementById("duplicatestatus").innerHTML=("This Number Doesn't Exist!");
                   // // document.getElementById("number").style.backgroundColor = 'red';
                // // }
                // // else {
                	// //$('#fname').html(result[3]);
                	// // $('#fcompany').html(response[1]);
                   	// // $('#fcountry').html(response[2]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// // $('').html(response[]);
                   	// //document.getElementById('fname').innerHTML=('hey');
//                    	
				document.getElementById("number").value = <?php echo(json_encode($no)); ?>;
				document.getElementById("0").value = <?php echo(json_encode($result[0])); ?>;
                document.getElementById("1").value = <?php echo(json_encode($result[1])); ?>;
                document.getElementById("2").value = <?php echo(json_encode($result[2])); ?>;
                document.getElementById("3").value = <?php echo(json_encode($result[3])); ?>;
                document.getElementById("4").value = <?php echo(json_encode($result[4])); ?>;
                document.getElementById("5").value = <?php echo(json_encode($result[5])); ?>;
                document.getElementById("6").value = <?php echo(json_encode($result[6])); ?>;
                document.getElementById("7").value = <?php echo(json_encode($result[7])); ?>;
                document.getElementById("8").value = <?php echo(json_encode($result[8])); ?>;
                document.getElementById("9").value = <?php echo(json_encode($result[9])); ?>;
                document.getElementById("10").value = <?php echo(json_encode($result[10])); ?>;
                document.getElementById("11").value = <?php echo(json_encode($result[11])); ?>;
                document.getElementById("12").value = <?php echo(json_encode($result[12])); ?>;
                document.getElementById("13").value = <?php echo(json_encode($result[13])); ?>;
                document.getElementById("14").value = <?php echo(json_encode($result[14])); ?>;
                document.getElementById("15").value = <?php echo(json_encode($result[15])); ?>;
                document.getElementById("16").value = <?php echo(json_encode($result[16])); ?>;
                document.getElementById("17").value = <?php echo(json_encode($result[17])); ?>;
                document.getElementById("18").value = <?php echo(json_encode($result[18])); ?>;
                document.getElementById("19").value = <?php echo(json_encode($result[19])); ?>;
                document.getElementById("20").value = <?php echo(json_encode($result[20])); ?>;
                document.getElementById("21").value = <?php echo(json_encode($result[21])); ?>;
                document.getElementById("22").value = <?php echo(json_encode($result[22])); ?>;
                document.getElementById("23").value = <?php echo(json_encode($result[23])); ?>;
                document.getElementById("24").value = <?php echo(json_encode($result[24])); ?>;
                document.getElementById("25").value = <?php echo(json_encode($result[25])); ?>;
                document.getElementById("26").value = <?php echo(json_encode($result[26])); ?>;
                document.getElementById("27").value = <?php echo(json_encode($result[27])); ?>;
                document.getElementById("28").value = <?php echo(json_encode($result[28])); ?>;
                document.getElementById("29").value = <?php echo(json_encode($result[29])); ?>;
                document.getElementById("30").value = <?php echo(json_encode($result[30])); ?>;
                document.getElementById("31").value = <?php echo(json_encode($result[31])); ?>;
                document.getElementById("32").value = <?php echo(json_encode($result[32])); ?>;
                document.getElementById("33").value = <?php echo(json_encode($result[33])); ?>;
                document.getElementById("34").value = <?php echo(json_encode($result[34])); ?>;
                document.getElementById("35").value = <?php echo(json_encode($result[35])); ?>;
                document.getElementById("36").value = <?php echo(json_encode($result[36])); ?>;
                document.getElementById("37").value = <?php echo(json_encode($result[37])); ?>;
                document.getElementById("38").value = <?php echo(json_encode($result[38])); ?>;
                document.getElementById("39").value = <?php echo(json_encode($result[39])); ?>;
                document.getElementById("40").value = <?php echo(json_encode($result[40])); ?>;
                
                   	                //  document.getElementByName("f-name").innerHTML=("hey");
                   // document.getElementById("fname").style.backgroundColor = 'red';
                     // }
                    //}
     //  });
    // });
// });
               
}
</script>
</html>