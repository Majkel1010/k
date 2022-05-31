<!DOCTYPE html>
<html>
<head>
	<title>Fajny formularz</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleformularz.css">
</head>
<body>

	<div class="naglowek">
		<h1>Pieczywo na formularz</h1>
	</div>
	<div class="main">
	
<?php
if (isset($_SESSION['login']))
 {

$login = $_SESSION['login'];	
 //echo	"To jest tylko dla zalogowanych<br>";

 echo  	"Witaj $login";
}else{
	echo "Zaloguj się";

}
require_once "polaczenie.php";
$polaczenie = new mysqli($serwer, $user, $pass, $baza);
$login = $_POST['login'];
$haslo = $_POST['haslo'];

$zapytanie = "SELECT id, imie, nazwisko, placa, stanowisko, pesel FROM pracownicy";
$wynik = $polaczenie->query($zapytanie);

$ile_znalezionych = $wynik->num_rows;
echo '<table>';
echo '<tr><td>ID</td><td>Imię</td><td>Nazwisko</td><td>Płaca</td><td>Stanowisko</td><td>PESEL</td></tr>';
for ($i=0; $i <$ile_znalezionych; $i++)
        {
                $wiersz = $wynik->fetch_assoc();
                echo '<tr>';
                echo '<td>'.$wiersz['id'].'</td>';
                echo '<td>'.$wiersz['imie'].'</td>';
                echo '<td>'.$wiersz['nazwisko'].'</td>';
                echo '<td>'.$wiersz['placa'].'</td>';
                echo '<td>'.$wiersz['stanowisko'].'</td>';
                echo '<td>'.$wiersz['pesel'].'</td>';

                echo '</tr>';
        }
echo '</table>';





$polaczenie->close();
?>

	</div>
	<div class="pasek">
		
	</div>
	<div class="stopka">
		Więcej o naszej piekarni możesz się dowiedzieć klikając w <a href="https://www.piekarniaklos.pl/"> link.</a>
			<br>

	</div>

</body>
</html>