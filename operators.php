<h1>Operators</h1>

<h2>Arithmetic Operators</h2>
 <p>+, -, *, /, % </p>
<?php 
	$a = 5;
	$b = 7;
	$c = $a + $b;
	echo "Total of a and b is=> ".$c;
?>

<h2>Assignment Operators</h2>
<p>=, +=, -=, *=, /=, %= </p>
<?php 
	$a = 5; 
	$b += 5;  // $b = $b + 5;  // 7 + 5 
	echo "Value of a is=> ". $a; // 5
	echo "<br>Value of b is=> ". $b; // 12

	$a -= 2;  // $a = $a - 2; // 5 -2 = 3
	echo "<br>Value of a is=> ". $a; // 3
?>

<h2>Comparison Operators</h2>
<p> ==, ===, !=, > , < , >=, s  </p>
<?php 
	$passingMarks = 33; // int
	$number =  "33";   // string

	if($passingMarks == $number){
		echo "Yes, both are same";
	}else{
		echo "not same";
	}

	// Output => Yes, both are same

	if($passingMarks === $number){
		echo "Yes, both are same";
	}else{
		echo "not same";
	}
	//Output => not same
?>

<?php 
$passingMarks = 33;
$number = 45;
if($number > $passingMarks){
	echo "<br>You are pass!";
}else{
	echo "<br>You are fail";
}

?>




<h2>Increment/Decrement Operator</h2>
<p>++, --</p>
<?php 
	$x = 10;
	echo "<br> Value of x is => ". $x;    // 10
	echo "<br> Value of x++ is => ". $x++; // 10
	echo "<br> Value of x is => ". $x;   // 11

	$y = 5;
	echo "<br> Value of y is => ".$y;  // 5
	echo "<br> Value of --y is =>". --$y; // 4  
?>

<h2>Logical Operator</h2>
<p> and && , or  || , ! </p>
<?php 
$result = 65;

if( ($result > 33) && ($result > 60)   ){  // Both condition should be true
	echo "<br>You are pass with first division";
}else{
	echo "&& no any condition true";
}


if( ($result > 33) || ($result > 60)   ){  // Any one condition should be true
	echo "<br>You are pass";
}else{
	echo "|| no any condition true";
}


if($result != 0){
	echo "You given exam";
}else{
	echo "You not attempt exam";
}

?>




