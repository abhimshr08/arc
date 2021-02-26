<?php

$con=mysql_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db('arc',$con) or die("Failed to connect to MySQL: " . mysql_error());
//inserting Record to the database
$name = $_POST['name'];
$email = $_POST['email'];
$message =  $_POST['message'];

$query = "INSERT INTO contact(contactName,contactEmail,message)VALUES('$name','$email','$message')";
$result = mysql_query($query);
if($result)
	{
	    echo "Successfully updated database";
	}
	else
	{
	 die('Error: '.mysql_error($con));
	}
	mysql_close($con);
?>
