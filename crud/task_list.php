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
	</thead>
	<tbody>
	<?php while($currentRow = mysqli_fetch_assoc($result) ){ ?>	
		<tr>
			<td><?php echo $currentRow['id']; ?></td>
			<td><?php echo $currentRow['title']; ?></td>
			<td><?php echo $currentRow['image']; ?></td>
		</tr>
	<?php } //while loop end ?>
	</tbody>
</table>