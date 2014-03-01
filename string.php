<?php
echo"<h2>->String operations</h2>";

echo"<h3>concatenation operator usage</h3>";
$t="hello";
echo"t is: $t<br>";
$p="world";
echo"s is: $p<br>";
$r="$t.$p";
echo"t concat p is: $r<br>";

$k=strlen("hello");
echo"<br>strlen:length of hello is: $k<br><br>";
echo"<br>string position of d in hello world:strpos ";
echo strpos("hello world","d");
$f=strcmp("hello","hell");
echo"<br><br>string comparison of hello with hell:$f";

echo"<h4> conversion of string to array</h4><br>";
$str="hello,hai,good,morning";
$q=explode(',', $str);
print_r($q);
echo"<br><br><h4>converting array to string</h4><br>";
$a=implode($q);
echo $a;
?>