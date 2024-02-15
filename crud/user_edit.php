<h1>Update Profile</h1>

<?php 
	include('database.php');
	$id = $_GET['id'];
	$query = "select * from users where id=$id";
	$result = mysqli_query($con,$query);
	$data = mysqli_fetch_assoc($result);
	//print_r($data);
?>

<form action="controller.php" method="POST">
	<input type="hidden" name="user_id" value="<?php echo $data['id']; ?>">
	Name: <input type="text" name="full_name" value="<?php echo $data['name']; ?>"> <br>
	Email: <input type="email" name="email_id" value="<?php echo $data['email']; ?>"> <br>
	Contact: <input type="number" name="contact_number" value="<?php echo $data['contact']; ?>"> <br>
	Address: <textarea name="address"><?php echo $data['address']; ?></textarea> <br>
	<input type="submit" name="update_user" value="Update User">
</form>

