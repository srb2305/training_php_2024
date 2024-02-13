<?php include('menubar.php'); ?>

<h1>Add User</h1>

<form action="controller.php" method="POST">
	Name: <input type="text" name="full_name"> <br>
	Email: <input type="email" name="email_id"> <br>
	Contact: <input type="number" name="contact_number"> <br>
	Address: <textarea name="address"></textarea> <br>
	<input type="submit" name="add_user" value="Add User">
</form>
