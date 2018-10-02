<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Camphila Herbals - My Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">
  <div class="header">
    <div class="logo"><img src="comp/logo.png" alt="" border="0" /></a></div>
    <div id="menu">
      <ul>
        <li><a href="index.html">home</a></li>
        <li><a href="about.html">about us</a></li>
        <li><a href="category.html">products</a></li>
        <li class="selected"><a href="userdetails.php">My account</a></li>
        <li><a href="register.php">register</a></li>
        <li><a href="details.html">prices</a></li>
        <li><a href="contact.html">contact</a></li>
      </ul>
    </div>
  </div>
  <div class="full_content">
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>My account</div>
      <div class="clear"></div>
	 
    </div>
	<?php
	require('connection.php');
	$q = "select username,mobile,email,address from register";
		$query = mysqli_query($con,$q) or die("Details not found.. +$uname not found");
		$row= mysqli_fetch_array($query);
		$un =  " ".$row['username'];
		$mobile =  " ".$row['mobile'];
		$email =  " ".$row['email'];
		$add =  " ".$row['address'];
		print "Welcome".$un; 
		print "<br>mobile".$mobile; 
		echo "<br>Email".$email;
		echo "<br>Address".$add;
	?>
	
	
    <!--end of left content-->
    
    <!--end of right content-->
   
  
  <!--end of center content-->
  
  
  
  
  
  
  
  
  
  
  
  
  <div class="footer">
    <div class="left_footer"><img src="comp/hsg.png" alt="" /><br />
	<i>This page is devolpoed by HSG SOLUTIONS</i><br>
	<i>contact us: saikiran.gutla183@gmail.com</i>
	</div>
      <div class="right_footer">
	  <a href="index.html">home</a> 
	  <a href="about.html">about us</a> 
	  <a href="specials.html">Products</a>
	  <a href="contact.html">contact us</a> 
	  </div>
  </div>
</div>
</html>

