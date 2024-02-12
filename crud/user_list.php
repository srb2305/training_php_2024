<?php 
	include('database.php'); 
	include('menubar.php');
?>


<h1>User List</h1>

<?php 
	$qry = "select * from users";
	$result = mysqli_query($con, $qry);
?>

<table border="1">
	<thead>
		<th>S/No</th>
		<th>Name</th>
		<th>Email ID</th>
		<th>Contact</th>
		<th>Address</th>
		<th>Delete</th>
		<th>Edit</th>
	</thead>
	<tbody>
	<?php while($currentRow = mysqli_fetch_assoc($result) ){ ?>	
		<tr>
			<td><?php echo $currentRow['id']; ?></td>
			<td><?php echo $currentRow['name']; ?></td>
			<td><?php echo $currentRow['email']; ?></td>
			<td><?php echo $currentRow['contact']; ?></td>
			<td><?php echo $currentRow['address']; ?></td>
			<td> <a href=""> Delete </a> </td>
			<td> <a href=""> Edit </a> </td>
		</tr>
	<?php } //while loop end ?>
	</tbody>
</table>