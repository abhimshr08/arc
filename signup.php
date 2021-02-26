<?php

$con=mysql_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db('arc',$con) or die("Failed to connect to MySQL: " . mysql_error());
//inserting Record to the database
$fname = $_POST['first'];
$lname = $_POST['last'];
$em = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO registration(Fname,Lname,email,password)VALUES('$fname','$lname','$em','$password')";
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
