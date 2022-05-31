<!DOCTYPE html>
<html>
<head>
	<title> Tablice zwykłe </title>
	<meta charset="utf-8">
</head>
<body>
<?php
$fib[1]=1;
$fib[2]=1;
for ($i=3; $i < 100 ; $i++) 
{ 
	$fib[$i]=$fib[$i-1]+$fib[$i-2];
}
print_r($fib);




/*
$tab = ['Jarek', 'Maciek', 'Ania', 'Bolek', 'Alicja'];
//rsort($tab);
//print_r($tab);
//$odp = "a,c,b,c,a,d";
//$tab = explode(",", "$odp");
$ciag = implode("*", $tab);
echo "$tab[0]";
*/


?>


</body>
</html>