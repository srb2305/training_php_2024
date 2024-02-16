<?php 
	include('database.php'); 
	include('menubar.php');
?>

<div class="container">
	<div class="jumbotron text-center">
		<h1>User List</h1>
	</div>
<?php 
	$qry = "select * from users";
	$result = mysqli_query($con, $qry);
?>

<b>
	<?php 
		if(isset($_GET['msg'])){ ?>
			<div class="alert alert-info">
			  <strong>Info!</strong> <?php echo $_GET['msg']; ?>
			</div>
	<?php	}
	?>
	
</b>
<p class="text-right">
	<a href="user_add.php" class="btn btn-primary">Add User</a>
</p>
<table class="table table-striped table-bordered">
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
			<td class="text-center">
				<?php 
					if($currentRow['active'] == 1){
						$status = 'Active';
						$css = "btn btn-success btn-xs";
					}else{
						$status = 'Inactive';
						$css = "btn btn-warning btn-xs";
					}
					?>
					<a class="<?php echo $css; ?>" href="controller.php?change_status_id=<?php echo $currentRow['id'];?>&current_status=<?php echo $currentRow['active']; ?>">
						<?php echo $status; ?> 
					</a>
				</td>
			<td> 
				<a class="btn btn-danger btn-xs"  href="controller.php?delete_user_id=<?php echo $currentRow['id'];?>"> Delete </a> 
			</td>
			<td> <a class="btn btn-info btn-xs" href="user_edit.php?id=<?php echo $currentRow['id'];?>"> Edit </a> </td>
		</tr>
	<?php } //while loop end ?>
	</tbody>
</table>

</div>