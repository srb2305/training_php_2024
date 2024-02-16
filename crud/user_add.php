<?php include('menubar.php'); ?>
<div class="container">
	<div class="jumbotron text-center">
		<h1>Add User</h1>
	</div>

	<form class="form-horizontal" action="controller.php" method="POST">
		<div class="form-group">
		    <label class="control-label col-sm-2" for="Name">Name:</label>
		    <div class="col-sm-10">
		      <input type="text" name="full_name" class="form-control"  placeholder="Enter your name">
		    </div>
		</div>
		<div class="form-group">
		    <label class="control-label col-sm-2" for="Email">Email:</label>
		    <div class="col-sm-10">
		      <input type="email" name="email_id" class="form-control"  placeholder="Enter your email">
		    </div>
		</div>
		<div class="form-group">
		    <label class="control-label col-sm-2" for="Contact">Contact:</label>
		    <div class="col-sm-10">
		      <input type="number" name="contact_number" class="form-control"  placeholder="Enter your contact number">
		    </div>
		</div>
		<div class="form-group">
		    <label class="control-label col-sm-2" for="Contact">Address:</label>
		    <div class="col-sm-10">
		      <textarea name="address" class="form-control"></textarea> 
		    </div>
		</div>

		 <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" name="add_user" class="btn btn-default">Submit</button>
		    </div>
		  </div>

	</form>

</div>
