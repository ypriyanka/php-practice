<?php
$vehicles=array("mercedese","bmw","hyundai","audi");
$vehicles[2]="jaguar";
echo"<h3>array declaration and displaying values</h3><br><br>";
echo "using echo<br>";
echo"the position 2 value is: {$vehicles[2]}<br><br>";
echo"using for each<br>";
foreach($vehicles as $a)
{
	echo"$a \n";
}
echo"<br><br>using print_r<br>";
print_r($vehicles);

echo"<h2>array sorting</h2>";
sort($vehicles);
print_r($vehicles);

echo"<h2>multi dimension array</h2>";
$vehi=array(
array("volvo",100,90),
array("vol",100,90),
array("volo",100,90),
array("vovo",100,90)
);
echo"<br>";
print_r($vehi);
echo"<br><br>";
echo $vehi[0][2];
?>