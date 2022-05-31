<!DOCTYPE html>
<html>
<head>
	<title>Asocjacyjne</title>
	<meta charset="utf-8">
</head>
<body>




<?php 
$osoby = ['Jan' => 'Kowalski', 'Ola' => 'Majka', 'Mirek' => ' Olszewski', 'Ala' =>  'Kalina'];
asort ($osoby);
foreach ($osoby as $key => $value)
{
	echo "$key wartosc $value<br>";
}


 ?>


</body>
</html>