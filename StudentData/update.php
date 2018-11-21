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
   $email=$_GET['email'];
  $conn = mysqli_connect("localhost","root","","studentdata")or die("Connection not Established");
echo "Database connection successfully...";
$result = mysqli_query($conn,"select * from addrecord where email='$email'");
$count=mysqli_num_rows($result);
?>
<br/><br/>
<form action=''method='GET' name='frm'>
<table align="center">
<?php
 $row=mysqli_fetch_array($result);
    
?>
<tr><td><label>Name</label></td><td><input type="text" name="name" value="<?php echo$row[0] ?>"/></td></tr>
<tr><td><label>Email</label></td><td><input type="text" name="email" value="<?php echo$row[1]?>" readonly/></td></tr>
<tr><td><label>Contact</label></td><td><input type="text" name="contact" value="<?php echo$row[2]?>"/></td></tr>
<tr><td><label>Photo</label></td><td><img src="<?php echo $row[3]?>" alt="image Not found" style="height:75px;width:75px; "/></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Update Record" name="s"></td></tr>  
</table>
</form>
<?php

   
   
 if(isset($_GET['s']))
 {
	 $conn = mysqli_connect("localhost","root","","studentdata")or die("Connection not Established");
echo "Database connection successfully...";

$name = $_GET['name'];
$email1 = $_GET['email'];
$contact = $_GET['contact'];
$v=mysqli_query($conn,"update addrecord  set name='$name',contact='$contact' where email='$email'");
 
  if($v>0)
   { echo "Record Updated Successully...";
   }
   else
    { echo "Record Updatation Fail...";
    }
}
 ?>

</body>
</html>