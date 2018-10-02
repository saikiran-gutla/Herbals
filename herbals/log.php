<?php
$con = mysqli_connect("localhost","root","","waste");
if(isset($_POST['b2']))
{

	$uname = mysql_real_escape_string($_POST['t1']);
	$pass = mysql_real_escape_string($_POST['t2']);
	
	/*execte mysql query */
	
		$q = "select username,pass from register where username='$uname' and pass='$pass'";
		$query = mysqli_query($con,$q) or die("Details not found.. +$uname not found");
		
		
		$row= mysqli_fetch_array($query);
		
		if($row['username'] == $uname && $row['pass'] == $pass)
		{
			
			
			header("location: userdetails.php");
		}
		else
		{
			echo "Details not found";
		}
		
	}
		
?>