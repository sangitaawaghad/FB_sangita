<html>
<head>
<link rel="stylesheet" href="mystyle.css" type="text/css">
<style>
form{
    margin-top:150px;
    border:5px solid blue;
	margin-left:200px;
	padding:10px;
	width:600px;
}

input[type=text] {
    width: 400px;
    padding: 10px 5px;
   // margin: 8px 0;
   // box-sizing: border-box;
}
input[type=password] {
    width: 400px;
    padding: 12px 10px;
   // margin: 8px 0;
   // box-sizing: border-box;
}
input[type=submit]{
     width:100px;
	 border-radius:5px;
	 font-family:Arial;
	 font-size:16px;
	 font-weight:bold;
	 color:darkblue;
	 height:50px;
}
label{
  font-family: Arial;
  font-size:16px;
  font-weight:bold;
  color:darkblue;
  font-style:solid;
}
</style>
</head>
<body>

 
<form class='form' action=''method='post' name='frm'>
<table style="width:600px;align:center">
<tr><td><label>Username</label></td><td><input type="text" name="user" value="" placeholder="Enter Username"></td></tr>
<tr><td><label>Password</label></td><td><input type="password" name="pass" value="" placeholder="Enter Password"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Login" name="s"></td></tr>
</table>
</form>
 <?php

  if(isset($_POST['s']))
  {
      $username=$_POST['user'];
      $password=$_POST['pass'];
      if($username=='admin' && $password=='admin')
      {header("Location: header.php");
      }
     else
      { echo "Invalid username and password";
      }
  }
 ?>
</body>
</html>