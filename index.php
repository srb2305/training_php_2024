<h1>PHP Basics</h1>

<?php 
	echo "Hello This is php output...";
	echo "<br>";
	echo "<b>This is bold in php</b>";
	echo '<br>This is another output';
?>

<h2>Variables Int</h2>

<?php 
	$a = 10; // int
	$b = 15; // int
	$c = $a + $b; // 25
	echo $c;
?>

<h2>Variables String</h2>
<?php 
	$name =  "Ram"; // string
	$lastName = "Kumar"; // string
	$fullName = $name . $lastName; // RamKumar
	echo $fullName;
	echo "<br>";
	$fullNameWithSpace = $name ." ". $lastName; // Ram Kumar
	echo $fullNameWithSpace;
?>

<h2>Variables float</h2>
<?php 
	$a = 20.5; // float
	$b = 30.6; // float
	echo $a + $b; // 51.1
?>


<h2>Swaping of 2 numbers </h2>
<?php 
	$x = 10;
	$y = 20;

	$z = $x; // 10
	$x = $y; // 20
	$y = $z; // 10

	echo "Value of X is => ". $x; // 20
	echo "<br>";
	echo "Value of Y is => ". $y; // 10
?>


<h2>Swaping of 2 numbers without using 3rd variable</h2>
<?php 
	$x = 10;
	$y = 20;

	$x=$x+$y; //  30
	$y=$x-$y; //  10
	$x=$x-$y; //  20

	echo "Value of X is => ". $x; // 20
	echo "<br>";
	echo "Value of Y is => ". $y; // 10
?>


