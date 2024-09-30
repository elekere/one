<?php
ini_set('display_error',1);
ini_set('display_startup_error',1);
error_reporting(-1);
require('db.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
<?php
$sql = "SELECT * FROM users ORDER BY id";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$count = 1;
?>
<table width="50%" style="border-collapse: collapse;" border="1">
<thead>
	<tr>
		<th><strong>S/N</strong></th>
		<th><strong>Names</strong></th>
		<th><strong>Usernames</strong></th>
		<th><strong>Phones</strong></th>
		<th><strong>Address</strong></th>
		<th><strong>Reg_time</strong></th>
		<th><strong>Edit</strong></th>
		<th><strong>DELETE</strong></th>

	<tr>
</thead>
<tbody>
	<?php
while($row = mysqli_fetch_assoc($result)){
	
?>


<tr>
	<td style="center"><?php echo $count ?></td>
	<td style="center"><?php echo $row['name']; ?></td>
	<td style="center"><?php echo $row['username']; ?></td>
	<td style="center"><?php echo $row['phone']; ?></td>
	<td style="center"><?php echo $row['address']; ?></td>
	<td style="center"><?php echo $row['trn']; ?></td>
	<td style="center"><a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a></td>
	<td style="center"><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>


</tr>


<?php
$count++;
}




?>


</tbody>
</table> 
<button><a href="insert.php">Insert</a></button>



</body>
</html>