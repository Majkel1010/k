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
	<h3>Czy poniższe dane są poprawne? Jeżeli nie wypełnij <a href="fajnyformularz.php">formularz<a/> ponownie.</h3>
	<?php
$dane = $_POST ["dane"];
$telefon = $_POST ["telefon"];
$sposob = $_POST ["sposob"];
$produkty = $_POST ["produkty"];

/*if (isset($_POST["submit"])) {
    if (empty($_POST["dane"]) ||

        empty($_POST["telefon"]) ||

        empty($_POST["sposob"]) || empty($_POST["produkty"])) {

      echo "<p style=\"color:red\">Musisz wypełnić wszystkie pola!</p>";

      echo "<p><a href=\"fajnyformularz.php\">Powrót do formularza</a></p>";

    } else {

echo "$dane składa zamówienie na: $produkty z $sposob <br>"; 
echo "Numer Kontaktowy to $telefon";
}*/
echo "$dane składa zamówienie na: $produkty z $sposob <br>"; 
echo "Numer Kontaktowy to $telefon";












  ?>
  <form action="piekarnia2.php" method="POST">
  	<input type="submit" value="Potwierdź dane">	
  </form>

	</div>
	<div class="pasek">
		
	</div>
	<div class="stopka">
		Więcej o naszej piekarni możesz się dowiedzieć klikając w <a href="https://www.piekarniaklos.pl/"> link</a>.
	</div>

</body>
</html>
