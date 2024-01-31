<h1>Data Type & Functions</h1>

<?php
$a = 10; 
echo $a;
ECHO "<br>";
ECHO "Your value is =>".$a;
echo "<br>";

echo "<br>Var_dump output of a =>";
var_dump($a);

echo "<br>";
$name = "Ram";
var_dump($name);
echo "<br>".$name;


echo "<br>";
$b = 10.5;
var_dump($b);
?>

<h2> Print_r</h2>
<?php 
$userIdAry = [101,102,103,104,105]; 
$userNAmeAry = ['ram','shyam','mohan']; 
print_r($userIdAry);
echo "<br>";
var_dump($userIdAry);
?>