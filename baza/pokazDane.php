<!DOCTYPE html>
<html>
<head>
	<title>Pokaz dane</title>
	<meta charset="utf-8">
</head>
<body>
<?php
$szukaj = $_POST["nazwa"];
include("polaczenie.php");
$polaczenie = new mysqli($serwer,$user,$pass,$baza);
mysqli_query($polaczenie,'SET NAMES utf-8');
$zapytanie = $polaczenie->query(" SELECT imie FROM `pracownicy` ");
while ($rekord = mysqli_fetch_array_($zapytanie))
{
$id = $rekord["id"];
$name = $rekord['imie'];
$sur  = $rekord['nazwisko'];

echo "Imię to $name nazwisko to $sur <br>" ;

}
$polaczenie->close();
?>



</body>
</html>