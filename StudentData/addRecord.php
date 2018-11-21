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
     width:200px;
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
   include "header.php";
 
 if(isset($_POST['s']))
 {
	 $conn = mysqli_connect("localhost","root","","studentdata")or die("Connection not Established");
echo "Database connection successfully...";

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$fname=$_FILES['f']['name'];
$imgpath= $_FILES['f']['tmp_name'];
$path="files/".$fname;
$v = mysqli_query($conn,"insert into addrecord values('$name','$email','$contact','$path')");
  if($v>0)
   { echo "Record inserted Successully.............";
   }
   else
    { echo "Fail.................";
    }
	move_uploaded_file($imgpath,"files/".$fname);
echo "File Uploaded Success...............";

}
 ?>
 

<form action=''method='post' name='frm'style="margin-top:100px" enctype="multipart/form-data">

<table align="center">
<tr><td><label>Name</label></td><td><input type="text" name="name" value="" placeholder="Enter Name" required></td></tr>
<tr><td><label>Email</label></td><td><input type="text" name="email" value="" placeholder="Enter Email" required></td></tr>
<tr><td><label>Contact</label></td><td><input type="text" name="contact" value="" placeholder="Enter Contact" required></td></tr>
<tr><td><label>Upload Photo</label></td><td><input type="file" name="f"/></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Add Record" name="s"></td></tr>
</table>
</form>
</body>
</html>