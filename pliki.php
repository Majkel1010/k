<!DOCTYPE html>
<html>
<head>
	<title>Pliki</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	$plik = fopen("pracownicy.txt", "r");
	$rozmiar = filesize("pracownicy.txt");
	$wyswietl = fread($plik,$rozmiar);
//$plik1 = file("pracownicy.txt");

	fclose($plik);
	$dopisz = "\naaaaa343333333333333 ";
	$dopisz1 = $wyswietl.$dopisz;

	$plik = fopen("pracownicy.txt", "w");
	fputs($plik,$dopisz1);


	






	//echo "$plik1[1]";
	//echo "<pre>$wyswietl</pre>";


	  ?>

</body>
</html>