<?php 
	include('database.php');

	if(isset($_POST['add_user'])){
		$name = $_POST['full_name'];
		$email = $_POST['email_id'];
		$number = $_POST['contact_number'];
		$address = $_POST['address'];

		$query = "insert into users(name,email,contact,address) values ('$name','$email','$number','$address')";
		//echo $query;
		$result = mysqli_query($con,$query);
		if($result){
			$message =  "Data inserted successfully";
		}else{
			$message = "Not inserted...";
		}

		header('location:user_list.php?msg='.$message);
	}

	if(isset($_POST['update_user'])){
		$name = $_POST['full_name'];
		$email = $_POST['email_id'];
		$number = $_POST['contact_number'];
		$address = $_POST['address'];
		$id = $_POST['user_id'];

		$query = "update users set name='$name',email='$email',contact='$number',address='$address' where id=$id";
		//echo $query;
		$result = mysqli_query($con,$query);
		if($result){
			$message = "Data updated successfully";
		}else{
			$message = "Not updated...";
		}

		header('location:user_list.php?msg='.$message);
	}


	if(isset($_POST['add_feedback'])){
		$feedback = $_POST['feedback'];
		$rating = $_POST['rating'];

		$query = "insert into feedbacks(feedback,rating) values ('$feedback','$rating')";
		$result = mysqli_query($con,$query);
		if($result){
			echo "Feedback inserted successfully";
		}else{
			echo "Not inserted...";
		}
		header('location:feedback_list.php');
	}

	if(isset($_POST['task_add'])){
		$title = $_POST['title'];

		$iamge_name = '';
		if($_FILES['image']) {
			$temp_name = $_FILES['image']['tmp_name'];
			$iamge_name = $_FILES['image']['name'];
			$destinationPath = "task_image/".$iamge_name;
			move_uploaded_file($temp_name,$destinationPath);
		}

		$query = "insert into assignments(title,image) values ('$title','$iamge_name')";
		$result = mysqli_query($con,$query);
		if($result){
			echo "Task added successfully";
		} else{
			echo "Something went wrong...";
		}
		header('location:task_list.php');
	}


	if(isset($_GET['delete_task_id'])){
		$id = $_GET['delete_task_id'];
		$query = "delete from assignments where id = '$id'";
		$result = mysqli_query($con,$query);
		if($result){
			echo "Task deleted successfully";
		} else{
			echo "Something went wrong...";
		}
		header('location:task_list.php');
	}

	if(isset($_GET['delete_user_id'])){
		$id = $_GET['delete_user_id'];
		$query = "delete from users where id = '$id'";
		$result = mysqli_query($con,$query);
		if($result){
			$message = "User deleted successfully";
		} else{
			$message = "Something went wrong...";
		}
		header('location:user_list.php?msg='.$message);
	}

	if(isset($_GET['change_status_id'])){
		$userId = $_GET['change_status_id'];
		$current_status = $_GET['current_status'];
		if($current_status == 1){
			$newStatus = 0;
		}else{
			$newStatus = 1;
		}

		$query = "update users set active=$newStatus where id = '$userId'";
		$result = mysqli_query($con,$query);
		if($result){
			$message = "Status updated successfully";
		} else{
			$message = "Something went wrong...";
		}
		header('location:user_list.php?msg='.$message);
	}


	if(isset($_POST['register_user'])){
		$name = $_POST['full_name'];
		$email = $_POST['email'];
		$number = $_POST['contact_number'];
		$role = 'user';
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		if($password != $confirm_password) {
			$msg = "Password and confirm password did not match";
			header('location:register.php?msg='.$msg);
		}
		$encryptedPassword = md5($password);

		
		
		$qry = "insert into users(name,email,contact,role,password) values('$name','$email','$number','$role','$encryptedPassword')";
		$return = mysqli_query($con,$qry);
		if($return){
			$msg = "Register Successfully...";
		} else {
			$msg = "Not Registered....";
		}
		header('location:user_list.php?msg='.$msg);







	}







?>