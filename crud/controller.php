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
?>