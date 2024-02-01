<h1>Array Functions</h1>
LIFO|FIFO
<pre>

<?php 
$rollNumberArray = array(5,6,8,1,2,10,15,100);

print_r($rollNumberArray);

echo "<h6>array_push 90</h6>";
array_push($rollNumberArray, 90);
print_r($rollNumberArray);

echo "<h6>array_pop</h6>";
array_pop($rollNumberArray); // remove last index
print_r($rollNumberArray);

echo "<h6>unset(4)</h6>";
unset($rollNumberArray[4],$rollNumberArray[5]);
print_r($rollNumberArray);


$rollNumberArray = array(5,6,8,1,2,10,15,100);
echo "<h4>array_splice(4)</h4>";
array_splice($rollNumberArray, 4, 2);
print_r($rollNumberArray);


$nameArray = array('Ram','Mohan','Shyam');
echo "<h4>array_splice(4)</h4>";
array_splice($nameArray, 1, 0, "Raj");
print_r($nameArray);

$nameArray = array('Ram','Mohan','Shyam');
echo "<h4>array_splice(4)</h4>";
array_splice($nameArray, 1, 1, "Raj");
print_r($nameArray);
?>