<?php
$login = $_POST["mojlogin"];
$password = $_POST["mojehaslo"];
$mojwybor = $_POST["wybor"];
$liczba1 = $_POST ["liczba1"];
$liczba2 = $_POST ["liczba2"];
$dzialanie = $_POST ["dzialanie"];
echo $dzialanie;
 
switch($dzialanie)
{
	case "+":
	$wynik = $liczba1+$liczba2;
	break;
	case "-":
	$wynik = $liczba1-$liczba2;
	break;
	case "*":
	$wynik = $liczba1*$liczba2;
	break;
	case "/":
	$wynik = $liczba1/$liczba2;
	break;
	
}



echo "Twój wynik to $wynik";




?>