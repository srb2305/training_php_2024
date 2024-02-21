<?php include('menubar.php');  ?>
<h1>My Profile</h1>
Welcome to login page....

<?php 

echo $_SESSION['user_name'];
echo $_SESSION['user_contact'];


?>