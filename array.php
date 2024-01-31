<h1>Array</h1>
- Index Array <br>
- Associative Array

<br>

<h1>Index Array</h1>

<?php 
	$nameArray = ['Ram','Mohan','Shyam'];

	print_r($nameArray);
	
	echo "<br>Total value of array => ".count($nameArray); // 3

	echo "<br>";
	echo "<br>".$nameArray[0]; // Ram
	echo "<br>".$nameArray[1]; // Mohan
	echo "<br>".$nameArray[2]; // Shyam
	echo "<br>";

	$numberArray = [5,10, 10.5, 'raja ram'];
	print_r($numberArray);
	echo "<br>";
	var_dump($numberArray);

	echo "<br>";
	array_push($nameArray, 'Anish');
	print_r($nameArray);


	echo "<br>";
	//array_push($nameArray[1], 'Raj');
	$nameArray[1] = 'Raj';
	print_r($nameArray);

?>


<h2>Associative Array</h2>
<?php 
echo "<pre>";
$singleAry =[
				'name' => 'Ram',
				'roll_number' => '101',
				'contact' => '78787878787'
			];
print_r($singleAry);
echo "<br>MultiDimensional Array<br>";

$studentAry = [
			[
				'name' => 'Ram',
				'roll_number' => '101',
				'contact' => '78787878787'
			],
			[
				'name' => 'Mohan',
				'roll_number' => '102',
				'contact' => '89898989898'
			],
			[
				'name' => 'Shyam',
				'roll_number' => '103',
				'contact' => '98989898989898'
			]
		];

print_r($studentAry);
?>