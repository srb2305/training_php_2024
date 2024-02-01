<h1>Array Sorting</h1>

<pre>
- sort()  => Sort array to ascending order.
- rsort() => Sort array to descending order.

- asort() => Sort Associative array to ascending order, according to the value
- ksort() => Sort Associative array to ascending order, according to the key
- arsort()=> Sort associative array to descending order, according to the value
- krsort() => Sort associative array to descending order, according to the key

</pre>

<pre>
<?php 
$nameArray = ['Ram','Shyam','Ramu','Anish','Ashish','Tanu'];
print_r($nameArray);
echo "<h2>sort array</h2>";
sort($nameArray);
print_r($nameArray); 

echo "<h2>rsort array</h2>";
rsort($nameArray);
print_r($nameArray); 
?>

<?php 
$studentRecord = [
	'Ram' 	=> 60,
	'Shyam' => 80,
	'Ramu' 	=> 20,
	'Anish' => 10,
	'Tanu' 	=> 33
];
print_r($studentRecord);
echo "<h2>asort</h2>";
asort($studentRecord);
print_r($studentRecord);


echo "<h2>ksort</h2>";
ksort($studentRecord);
print_r($studentRecord);


echo "<h2>arsort</h2>";
arsort($studentRecord);
print_r($studentRecord);


echo "<h2>krsort</h2>";
krsort($studentRecord);
print_r($studentRecord);
?>