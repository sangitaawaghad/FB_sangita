<html>
<head>
<style>
table{
	border-collapse:collapse;
	width:800px;
	
	}
	td {
		border:1px solid black;
		
	}
</style>
</head>
<body>

<?php
include 'header.php';
$conn =mysqli_connect("localhost","root","","studentdata")or die("Connection not Establish");
echo"Connection established Successfully...";
$result=mysqli_query($conn,'Select * from addrecord');
$count=mysqli_num_rows($result);
?>
<br/><br/><br/><br/>

<table style="margin-top:50;"align="center">
<tr><td>Name</td><td>Email</td><td>Contact No.</td><td>Profile Photo</td><td>Delete</td>
 <td>Update</td></tr>
<?php
  while($row=mysqli_fetch_array($result))
  {	  
?>
<tr><td><?php echo$row[0] ?></td>
    <td><?php echo$row[1]?></td>
	<td><?php echo$row[2]?></td>
	<td><img src="<?php echo $row[3]?>" alt="image Not found" style="height:75px;width:75px; "/></td>
	<td><a href='delete.php?em=<?php echo $row[1];?>'>Delete</a></td>
    <td><a href='update.php?email=<?php echo $row[1];?> '>Update</a></td>
</tr>
  <?php }?>
  
</table>

</body>
</html>