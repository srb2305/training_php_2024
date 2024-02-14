<?php 
	include('database.php'); 
	include('menubar.php');
?>

<h1>Assignment/Task List</h1>

<?php 
	$qry = "select * from assignments";
	$result = mysqli_query($con, $qry);
?>

<table border="1">
	<thead>
		<th>S/No</th>
		<th>Title</th>
		<th>Image</th>
		<th>Action</th>
	</thead>
	<tbody>
	<?php while($currentRow = mysqli_fetch_assoc($result) ){ ?>	
		<tr>
			<td><?php echo $currentRow['id']; ?></td>
			<td><?php echo $currentRow['title']; ?></td>
			<td>
				<img src="task_image/<?php echo $currentRow['image']; ?>" style="width: 50;height: 50;">
			</td>
			<td> 
				<a href="controller.php?delete_task_id=<?php echo $currentRow['id']; ?>"> Delete </a>
			</td>
		</tr>
	<?php } //while loop end ?>
	</tbody>
</table>