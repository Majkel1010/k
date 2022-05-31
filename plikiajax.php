<!DOCTYPE html>
<html>
<head>
	<title> Pliki </title>
	<meta charset="utf-8">
</head>
<body>
<?php
$plik = fopen("tekstowy.txt", "r");
$rozmiar = filesize("tekstowy.txt");
$wyswietl = fread($plik, $rozmiar);

//$plik1 = file("tekstowy.txt");
//echo "$plik1[3]"; 
echo $wyswietl ; 
fclose($plik);
$dopisz = "\n ssssssssssssss "; 

$dopisz1=$wyswietl.$dopisz;

$plik = fopen("tekstowy.txt","w");
fputs($plik,$dopisz1);
fclose($plik);
?>
</body>
</html>