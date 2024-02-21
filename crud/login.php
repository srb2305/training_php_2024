<?php  include('menubar.php'); ?>

<h1>Login</h1>

	
	 
<div class="alert alert-danger">
<?php 
	echo (isset($_GET['msg'])) ? $_GET['msg'] : '';
?>	
</div>
<form action="controller.php" method="POST">
	Email: <input type="email" name="email_id"> <br>
	Password: <input type="password" name="password" > <br>
	<input type="submit" name="login" value="Login">
</form>