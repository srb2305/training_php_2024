<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php session_start(); ?>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">WebSiteName</a>
	    </div>
	    <ul class="nav navbar-nav pull-right">
	      <li class="active"><a href="user_list.php">User</a></li>
	      <li><a href="feedback_list.php">Feedback</a></li>
	      <li><a href="task_list.php">Assignment</a></li>
	    <?php 
	    	if(isset($_SESSION['is_user_login'])) { 
	    		echo "<li><a href='profile.php'>".$_SESSION['user_name']."</a></li>";
	    		echo "<li><a href='logout.php'>Logout</a></li>";
	     	} else { 
	     		echo "<li><a href='register.php'>Register</a></li>";
	      		echo "<li><a href='login.php'>Login</a></li>";
	     	}
	     ?>  
	      
	      
	    </ul>
	  </div>
	</nav>

	
	
	

	



