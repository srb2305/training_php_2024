<?php
	include('menubar.php');
 ?>
<h1>Add Your Task</h1>

<form action="controller.php" method="POST" enctype="multipart/form-data">
	Title: <input type="text" name="title"> <br>
	Image: <input type="file" name="image"> <br>

	<input type="submit" name="task_add" value="Add">
</form>
