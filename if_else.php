<h1>conditions</h1>
<p>if,   if else  ,  if elseif,  nested if, switch</p>


<?php 
	$number = 70;
	if($number > 33){
		echo "<br>You are pass";
	}


	if($number > 33){
		echo "<br>You are pass";
	}else{
		echo "You are fail";
	}



	$number = 45;
	if($number >= 60) {
		echo "<br>You are pass with first div";
	} elseif ($number >= 45) {
		echo "<br>You are pass with second div.";
	} elseif ($number >= 33){
		echo "<br>You are pass with third div.";
	}else{
		echo "<br>You are fail";
	}


	// Nested If
	$number = 36;
	if($number >= 33){
		if($number >= 60){
			echo "<br>Pass with first div";
		}
	} else {
		echo "<br>You are fail";
	}
?>


<h2>Switch</h2>
<?php 
	$number = 85;
	switch($number){
		case ($number >= 60):
			echo "<br>You are pass with first div";
			break;
		case ($number >= 45):
			echo "<br> You are pass with second div.";
			break;
		case ($number >= 33):
			echo "<br> You are pass with third div";
			break;
		default:
			echo "<br>You are fail";	
	}



?>