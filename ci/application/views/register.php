<html>
<head>
</head>
<body>
<form action="http://localhost/ci/index.php/insctrl/save" method="GET">
<table align="center" border="1px solid black">
<tr><td>Name</td><td><input type="text" name="name"/></td></tr>
<tr><td>Email</td><td><input type="text" name="email"/></td></tr>
<tr><td>Contact</td><td><input type="text" name="contact"/></td></tr>
<tr><td colspan="2"><input type="submit" name="s" value="Save"/></td></tr>
</table>
</form>
<table align="center" border="1px solid black">
<tr>
<th>Employee Id</th>
<th>Name</th>
<th>Email</th>
<th>Contact</th>
</tr>
<?php
foreach($r as $row)
{
	?>
	<tr>
	<td><?php echo $row->eid; ?></td>
	<td><?php echo $row->name;?></td>
	<td><?php echo $row->email; ?></td>
	<td><?php echo $row->contact; ?></td>
	</tr>

<?php
	}
?>
</table>
</body>
</html>