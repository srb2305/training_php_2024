<?php include('menubar.php'); ?>

<h1>Add Feedback</h1>

<form action="controller.php" method="POST">
	Feedback: <input type="text" name="feedback"> <br>
	Rating:  <select name="rating">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>   <br>
	<input type="submit" name="add_feedback" value="Add Feedback">
</form>
