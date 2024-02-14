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
			echo "Data inserted successfully";
		}else{
			echo "Not inserted...";
		}

		header('location:user_list.php');
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










?>