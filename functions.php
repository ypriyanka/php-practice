<?php
function recarea($a=0,$b=0)
{
	echo"the area of rectangle with length $a and breadth $b is:".($a*$b);
}

echo"<h3>calling recarea function</h3><br>";
recarea(5,8);
echo"<br><br>";
recarea(5,3);
echo"<br><br>";
recarea(6,6);

?>