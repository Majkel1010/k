<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Szkoła Podstawowa</title>
	<link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
	<div id="baner">
		<h1>Oceny uczniów: biologia</h1>
	</div>
	<div id="lewy">
		<h2>	Uczeń:	</h2>
		<?php
//$szukaj = $_POST["szkola"];
include("polaczeniee.php");
$polaczenie = new mysqli($serwer,$user,$pass,$baza);
mysqli_query($polaczenie,'SET NAMES utf-8');
$zapytanie = $polaczenie->query(" SELECT `nazwisko` , `PESEL` FROM `uczen` ");
while ($rekord = mysqli_fetch_array_($zapytanie))
{
$imie = $rekord['imie'];
$sur  = $rekord['nazwisko'];

echo " <h3> $name $sur </h3><br>" ;

}
$polaczenie->close();
?>
		<a>Najwyższa ocena z biologii</a>
		<script type="text/javascript">
			
		</script>
	</div>
	<div id="prawy">
		<h3>Nazwiska i numery PESEL uczniów:</h3>
	</div>
	<div id="stopka">
		<h3>Szkoła Podstawowa</h3><br>
		Stronę opracował: 12345678901
	</div>


</body>
</html>