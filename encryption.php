<h1>Encryption md5</h1>
<?php 
	$password = '123456';
	echo "Your password is=> ".$password; // 123456
	echo "<br>Your MD5 password is=> ". md5($password); // e10adc3949ba59abbe56e057f20f883e



	$password = '123456';
	echo "<br><br>Your password is=> ".$password; // 123456
	echo "<br>Your MD5 password is=> ". md5($password); // e10adc3949ba59abbe56e057f20f883e




	$password2 = 'Ram@12345';
	echo "<br><br>Your password is=> ".$password2; // Ram@12345
	echo "<br>Your MD5 password is=> ". md5($password2); // 1b7b4c38f626766bbdcfc895e2c514f6


?>
<h1>Encryption base64</h1>
<?php 

	$password = '123456';
	echo "<br><br>Your password is=> ".$password; // 123456
	echo "<br>Your MD5 password is=> ". base64_encode($password); // MTIzNDU2

	$password = '123456';
	echo "<br><br>Your password is=> ".$password; // 123456
	echo "<br>Your Base64 password is=> ". base64_encode($password); // MTIzNDU2

	echo "<br>Your Base64 password is=> ". base64_decode('MTIzNDU2'); // 123456 
?>


<h1>Password Hash</h1>
<?php 
	$password = '123456';
	echo "<br><br>Your password is=> ".$password; // 123456
	echo "<br>Your MD5 password is=> ". password_hash($password, PASSWORD_DEFAULT); // $2y$10$Djgpc3xf.1sy5C0wooSYoedfz7Ftvlll6Ws.Fmwb227BKtM4CdI8q
	echo "<br>Your MD5 password is=> ". password_hash($password, PASSWORD_DEFAULT); // $2y$10$M6nH1BKP8X1pTZYYDICF8eza/a54zaaEhwXr/us3L9DxxLhmcj2iy
?>

<h1>SHA1</h1>
<?php 
	$password = '123456';
	echo "Your password is=> ".$password; // 123456
	echo "<br>Your MD5 password is=> ". sha1($password); // $2y$10$Djgpc3xf.1sy5C0wooSYoedfz7Ftvlll6Ws.Fmwb227BKtM4CdI8q
	echo "<br>Your MD5 password is=> ". sha1($password); // $2y$10$M6nH1BKP8X1pTZYYDICF8eza/a54zaaEhwXr/us3L9DxxLhmcj2iy
?>




<h1>Custom Enc></h1>
<?php 
	$password = "123456";
	$array = [1=> '@#1', 2=>'*&S',3=>'FAFAF'];
	$finalValue = '@#1*&S';

	$newPwd = '14re#$12'.md5($password).'*&AQERWD' ; // 14re#$12e10a_dc394_9ba59abbe56e057f20f883e*&AQERWD
?>

<h1>Random Number</h1>
<?php 
	echo "<br>Random number is =>"; 
	echo rand(1000,9999);

?>














