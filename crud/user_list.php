<?php 
	include('database.php'); 
	include('menubar.php');
?>


<h1>User List</h1>

<?php 
	$qry = "select * from users";
	$result = mysqli_query($con, $qry);
?>

<b>
	<?php 
		if(isset($_GET['msg'])){
			echo $_GET['msg']; 
		}
	?>
	
</b>

<table border="1">
	<thead>
		<th>S/No</th>
		<th>Name</th>
		<th>Email ID</th>
		<th>Contact</th>
		<th>Address</th>
		<th>Status</th>
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
			<td>
				<?php 
					if($currentRow['active'] == 1){
						$status = 'Active';
					}else{
						$status = 'Inactive';
					}
					?>
					<a href="controller.php?change_status_id=<?php echo $currentRow['id'];?>&current_status=<?php echo $currentRow['active']; ?>">
						<?php echo $status; ?> 
					</a>
				</td>
			<td> <a href="controller.php?delete_user_id=<?php echo $currentRow['id'];?>"> Delete </a> </td>
			<td> <a href="user_edit.php?id=<?php echo $currentRow['id'];?>"> Edit </a> </td>
		</tr>
	<?php } //while loop end ?>
	</tbody>
</table>