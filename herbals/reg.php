<?php
$con =  mysqli_connect("localhost","root","","waste");
if(!$con)
{
	echo "Connection Denied";
}
	else
	{
	}
if(isset($_POST['b1']))
{

	$uname = mysql_real_escape_string($_POST['un']);
	$pass1 = mysql_real_escape_string($_POST['pwd']);
	$pass2 = mysql_real_escape_string($_POST['cpass']);	
	$phone = mysql_real_escape_string($_POST['phone']);	
	$email = mysql_real_escape_string($_POST['email']);
	$address = mysql_real_escape_string($_POST['address']);
	if($pass1 != $pass2)
	{
		echo  "passwords mismatch...enter correctly";
	}
			else
			{
				
			$q = "insert into register(username,pass,mobile,email,address)values('$uname','$password','$phone','$email','$address');";
			mysqli_query($con,$q);
			header("location: regs.html");
			}
}
?>


