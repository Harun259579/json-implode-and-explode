<?php
//implode()--->Convert array to string
//explode()--->convert String to array
//array_map()--> it applies a certain normal function/callback into the elements of the array.array elements gulo ki kaj krve tar function ,ar jonno use krbo array_map().

$array = array("abir","abrar","hasan","jony");

echo(implode("-", $array));
echo"<br>";


$abc = "a,b,c,d";
$arr=explode(",", $abc);
foreach ($arr as $i) {
	echo $i."<br>";
}
echo"<br>";

function double($num)
{
	return $num*=2;

}
$numbers = [1,2,3,4,5];
$doublenum = array_map("double",$numbers);
print_r($doublenum);

?>