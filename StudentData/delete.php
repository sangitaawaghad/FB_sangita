<?php
$email=$_GET['em'];
$conn =mysqli_connect("localhost","root","","studentdata")or die("Connection not Establish");
echo"Connection established Successfully...";
$result=mysqli_query($conn,"delete from addrecord where email='$email'");
echo $result;
if($result>0)
 { header("Location: view.php");
 }
else
{ echo "Fail.................";
}
?>