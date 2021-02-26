<?php 
session_start(); //to ensure you are using same session
if(isset($_SESSION) && isset($_SESSION['Fname']) && $_SESSION['Fname']!='' && $_SESSION['Lname']!=''){
	echo 'Welcome '.$_SESSION['Fname'].' '.$_SESSION['Lname']." <a href='index.html'>Home</a> | <a href='logout.php'>Logout</a>";
}
?>