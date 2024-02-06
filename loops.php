<h1>Loops</h1>
<pre>
	- While Loop
	- do while Loop
	- For Loop
	- Foreach Loop
</pre>

<h2>While Loop</h2>
<?php 
	$value = 5;
	while ($value <= 10){
		echo "<br>Condition is true=>";
		echo $value++;
	}
?>

<h2>Do While</h2>
<?php
	$value = 9; 
	do {
		echo "<br> Your value is=> ".$value;
		$value++;
	} while ($value <= 10);

?>

<h2>For Loop</h2>
<?php 
	
	for ($i=2; $i <= 20; $i++) { 
		echo "<br>Value is => ".$i;
	}
	echo "<br><br>Table of 2<br>";
	for ($i=2; $i <= 20;) { 
		echo "<br>Value is => ".$i; // 2 4 6
	    $i = $i+2; // 4 6 8
	}

	echo "<br><h3>Table of 5</h3>";

	for ($i=5; $i <= 50;) { 
		echo "<br>Value is => ".$i; // 5 10 ... 50
	    $i = $i+5; // 10 15  ... 55
	}	
?>

<h2>ForEach Loop</h2>
<?php 
	$array = array('Ram','Shyam','Mohan','Raju','RAmu');
	foreach($array as $value){
		echo '<br>'.$value;
	}
	echo "<br>";
	$array2 = [
		[
			'rollnumber' => 101,
			'name'		=> 'Ram',
			'email'		=> 'ram@gmail.com'
		],
		[
			'rollnumber' => 102,
			'name'		=> 'shyAM',
			'email'		=> 'shyam@gmail.com'	
		],
		[
			'rollnumber' => 103,
			'name'		=> 'mOHan',
			'email'		=> 'mohan@gmail.com'
		],
		[
			'rollnumber' => 104,
			'name'		=> 'Ramu',
			'email'		=> 'ramu@gmail.com'
		]		
	];

	foreach($array2 as $key => $val){
			echo "UserData=>". $val['rollnumber'];
			echo "-". $val['name'];
			echo "-". $val['email'];
			echo "<br>";
	}


?>



<table border="1">
	<thead>
		<th>Roll Number</th>
		<th>Email</th>
		<th>Name</th>
	</thead>
	<tbody>
		<?php foreach($array2 as $key => $val){ ?>
		<tr>
			<td><?php echo $val['rollnumber'];  ?></td>
			<td><?php echo $val['email']; ?></td>
			<td><?php echo  ucfirst(strtolower($val['name']));  ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>



