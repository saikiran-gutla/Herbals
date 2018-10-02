<?php
require("connection.php");
if(isset($_POST['b3']))
{

	$name = mysql_real_escape_string($_POST['t1']);
	$email = mysql_real_escape_string($_POST['t2']);
	$phone = mysql_real_escape_string($_POST['t3']);	
	$msg = mysql_real_escape_string($_POST['t4']);	
	$q = "insert into remarks(name,email,phone,remark)values('$name','$email','$phone','$msg');";
			mysqli_query($con,$q);
			header("location: success.php"); //not yet created success.php
			}
}
?>