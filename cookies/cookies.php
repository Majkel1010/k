<?php
$godzina = time();


//setcookie('proba','od serwisu localhost', $godzina+3060);

if(isset( $_COOKIE['licznik']))
{
	$ile = $_COOKIE['licznik']+1 ;
	setcookie('licznik',$ile,$godzina+3060);
	echo $_COOKIE['licznik'];
}else{
	setcookie('licznik','1', $godzina+3060);
}



 ?>