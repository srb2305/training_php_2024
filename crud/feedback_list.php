<?php 
	include('database.php'); 
	include('menubar.php');
?>
<div class="container">
	<h1>Feedback List</h1>
		<a href="feedback_add.php">Add Feedback</a>
	<?php 
		$qry = "select * from feedbacks";
		$result = mysqli_query($con, $qry);
	?>

	<table border="1">
		<thead>
			<th>S/No</th>
			<th>Feedback</th>
			<th>Rating</th>
		</thead>
		<tbody>
		<?php while($currentRow = mysqli_fetch_assoc($result) ){ ?>	
			<tr>
				<td><?php echo $currentRow['id']; ?></td>
				<td><?php echo $currentRow['feedback']; ?></td>
				<td><?php echo $currentRow['rating']; ?></td>
			</tr>
		<?php } //while loop end ?>
		</tbody>
	</table>
</div>