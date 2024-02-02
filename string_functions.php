<h1>String Function</h1>

<?php 
$text = " This is the first text";
echo $text;
echo "<br>Strlen is =>". strlen($text); // 9

echo "<br>str_word_count is =>". str_word_count($text); // 2

echo "<br>Strlen with trim is =>". strlen(trim($text)); // 7

echo "<br>Strlen with trim is =>". strpos($text, 'first'); // 13


$name = 'ram KUMar';
echo "<br>Name is => ".  $name;    // ram KUMar
echo "<br>ucfirst is => ".  ucfirst($name); // Ram KUMar
echo "<br>strtoupper is => ".  strtoupper($name); //RAM KUMAR
echo "<br>strtolower is => ". strtolower($name); // ram kumar
echo "<br>ucfirst strtolower is => ". ucfirst (strtolower($name)); // Ram kumar

$name = 'ram kumar';
echo "<br>ucwords is => ".  ucwords($name); // Ram Kumar


$text = str_replace('text', 'content', $text);

echo "<br>str_replace  => ".  str_replace('text', 'content', $text);

echo '<br>'.$text;


echo '<br>strrev => '. strrev($text);


$nameString = "Ram Mohan Manoj Sagar";
echo "<br>NameString value is=> ".$nameString;
//explode(delimiter, string);  // String to array
//implode(glue, pieces);    // Array to string
echo "<br>String to array - explode => ";
print_r( explode(" ", $nameString));


$nameString = "Ram,Mohan,Manoj,Sagar";
echo "<br>NameString explode => ";
print_r( explode(",", $nameString));


$studentAry = ['Mohan','Manoj','Ram'];
echo "<br>studentAry => ";
print_r($studentAry);
echo "<br> implode Array to string => ";
echo implode(',', $studentAry);
?>