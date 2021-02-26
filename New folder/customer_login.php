<?php


include("includes/db.php");
?>
<div>
<form method="post" action="">
<table width="500" align="center">
<tr align="center">
<td colspan="3"><h2>Already a member</h2></td>
</tr>
<tr align="center">
<td><h3>Login Here</h3></td>
</tr>
<tr>
<td align="right" style="font-size:18px"><b>Email</b></td>
<td><input type="text" name="email" placeholder="Enter Your Email" class="textbox"></td>
<tr>
<td align="right" style="font-size:18px"><b>Password</b></td>
<td><input type="password" name="pass" placeholder="Enter Password" class="textbox"></td>
</tr>
<tr align="center">
<td colspan="3"><a href="checkout.php?forgot_pass">Forgot Password</a></td>
</tr>
<tr align="center">
<td colspan="3"><input type="submit" name="login" value="Login"></td>
</tr>

</table>
<h4 style="float:right"><a href="customer_register.php" style="text-decoration:none">Register Here</a></h4>
</form>
<?php

if(isset($_POST['login']))
{
	$c_email=$_POST['email'];
	$c_pass=$_POST['pass'];
	
	$sel_c="select * from customers where customer_pass='$c_pass' AND customer_email='$c_email'";
	
	$run_c=mysqli_query($con, $sel_c);
	$check_customer=mysqli_num_rows($run_c);
	if($check_customer==0)
	{
		echo"<script>alert('Please Enter Correct Email or Password')</script>";
		exit();
	} 
	$ip=getIp();
	$sel_cart="select * from cart where ip_add='$ip'";
	$run_cart=mysqli_query($con, $sel_cart);
	$check_cart=mysqli_num_rows($run_cart);
	
	if($check_customer>0 AND $check_cart==0)
	{
		$_SESSION['customer_email']=$c_email;
		echo"<script>alert('Logged in successfully, Thanks!')</script>";
		echo"<script>window.open('customer/my_account.php','_self')</script>";
	}
	else
	{
		$_SESSION['customer_email']=$c_email;
		echo"<script>alert('Logged in successfully, Thanks!')</script>";
		echo"<script>window.open('checkout.php','_self')</script>";
	}
}

?>
</div>
</body>
</html>