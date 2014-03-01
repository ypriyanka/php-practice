<?php
class vehicle
{
  var $name;
	 var $color;	
	function assign($a,$b)
	{
		global $name,$color;
		$name=$a;
		$color=$b;
	}
	
	function display()
	{
		global $name,$color;
		echo"<h2>classes example</h2><br>";	
		echo"the vehicle name is:$name"."   <br>vehicle color is: $color";
	}
	
}

$c=new vehicle();
$c->assign("audi","blue");
$c->display();
?>