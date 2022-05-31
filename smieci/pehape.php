<?php
$imie = "Jan";
$nazwisko = "Kowalski";
$osoba = $imie.$nazwisko;
$wiek = 48;
$wzrost = 1.64;
$wynik = $wiek/2;
//echo "Wynik to $wynik";
//echo "jest ok";

echo "Moje zmienne to: $imie, $nazwisko, $wiek, $wzrost <br> ";
if ($wzrost>200)
	{
		echo "jesteś wysokim typem <br> " ;
		echo "zmalej trochę <br>" ;
	} else
	{
		echo "Jesteś mały <br>" ;
	}
	if ($osoba=="JanKowalski")
	{
		echo "To ja" ;
	}else
	{
		echo "To nie jestem ja";
	}
	// && i
	// || lub
	// != różny od
	// == jest równy
	
	
?>
