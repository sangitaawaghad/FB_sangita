<html>
<head>

</head>
<body>
<form name='frm' action="" method="post">
<table>
<tr><td>Username</td><td><input type="text" value="" name="Uname"/></td></tr>
<tr><td>Password</td><td><input type="password" value="" name="password"/></td></tr>
<tr><td>Email</td><td><input type="text" value="" name="email"/></td></tr>
<tr><td>Phone</td><td><input type="text" value="" name="phone"/></td></tr>
<tr><td colspan="2"><input type="submit" value="submit" name="s"/></td></tr>
</table>
<p style="Color:red"><?php if(isset($msg)){ echo"$msg";} ?></p>
<p style="Color:green"><?php if(isset($c_msg)){echo"$c_msg";}?></p>
</form>

<?php 

 if(isset($_POST['s']))
 {$name=$_POST['Uname'];
$password=$_POST['password'];
$pass_len=strlen($password);
$email=$_POST['email'];
$ph=$_POST['phone'];
$msg="";

	 if(empty($name))
     {
		 $msg="**Please Enter Username";
	 }
	 else if(empty($password))
	 {
		 $msg="**Please Enter Password";
	 }
	 else if($pass_len<=6)
	 {
		 $msg="**Password should be more than 6 characater";
	 }
	 else if(empty($email))
	 {
		 $msg="**Please Enter Email";
	 }
	 else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	 {
		 $msg="**Please Enter valid Email";
	 }
	 else if(empty($ph))
	 {
		 $msg="**Please Enter Phone Number";
	 }
	 else
     {
		 $c_msg="**Every thing is correct";
	 }
 }
?>
</body>
</html>
