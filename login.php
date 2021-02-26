<?php 
session_start();//starting the session for user profile page
 $con=mysql_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db('arc',$con) or die("Failed to connect to MySQL: " . mysql_error());
 
 $ID = $_POST['user'];
 $Password = $_POST['pass'];
 
 SignIn($ID,$Password); 
 
 function SignIn($ID,$Password) 
 {
	
	//if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
	//{ 
		$sql = "SELECT * FROM registration where email = '$ID' AND password = '$Password'";
		$query = mysql_query($sql) or die(mysql_error());
		
		if(mysql_num_rows($query)>0){
			$row = mysql_fetch_array($query) or die(mysql_error());
			$_SESSION['Fname'] = $row['Fname'];
			$_SESSION['Lname'] = $row['Lname'];
			$_SESSION['email'] = $row['email'];
			echo 'Welcome '.$row['Fname'].' '.$row['Lname']." <a href='index.html'>Home</a> | <a href='logout.php'>Logout</a>";
			echo "<br>SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
			
		} else {
			echo "SORRY... YOU ENTERD WRONG EMAIL or PASSWORD... PLEASE RETRY..."; 
		} 
	//} 
} 
	//if(isset($_POST['submit']))
	//{
		
	//} 
		
?>

