<?php

$con=mysql_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db('arc',$con) or die("Failed to connect to MySQL: " . mysql_error());
//inserting Record to the database
	$fname=$_POST['first'];
	$lname=$_POST['last'];
	$nog=$_POST['nog'];
	$am=$_POST['arrivingDatem'];
	$ad=$_POST['arrivingDated'];
	$ay=$_POST['arrivingDatey'];
	$bookt=$_POST['bookingType'];
	$treatment=$_POST['chooseTreatment'];
	$phone=$_POST['phone'];
	$additionalreq=$_POST['additionalRequest'];

$query = "INSERT INTO booking(fname,lname,nog,bookt,arrivingdate,treatment,phno,additionalreq)VALUES('$fname','$lname','$nog','$bookt','$ay-$am-$ad','$treatment','$phone','$additionalreq')";
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
