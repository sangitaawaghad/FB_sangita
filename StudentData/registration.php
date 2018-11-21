<html>
<head>
<link rel="stylesheet" href="mystyle.css" type="text/css">
<style>
.form{
    margin-top:300px;
    border:1px solid darkblue;
	margin-left:800px;
	padding:10px;
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
<?php
 include 'header.php';
?>

<form action='Home.php'method='post' name='frm'>
<table align="center">
<tr><td><label>Name</label></td><td><input type="text" value="" placeholder="Enter Name"></td></tr>
<tr><td><label>Email</label></td><td><input type="text" value="" placeholder="Enter Email"></td></tr>
<tr><td><label>Contact</label></td><td><input type="text" value="" placeholder="Enter Contact"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Add Record" name="btnaddrecord"></td></tr>
</table>
</form>
</body>
</html>