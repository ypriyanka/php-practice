<?php
echo"hello";
$con=mysql_connect("localhost","root","vsspl")or die("unable to connect");
if($con)
{
	echo"connect";
}
else
{
	echo"not connected";
}
?>