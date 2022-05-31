<?php
session_start();
$login = $_POST['login'];
$haslo = $_POST['haslo'];
if($login=='admin' && $haslo=='tajne')
{
	$_SESSION['login']=$login;
	include("dlazalogowanych.php");
}else{
	echo "Zły login lub hasło spróbuj pownownie <a 'href=index.php'> Powrót</a>";
}






//$_SESSION['godzina']='15.00';
//$_SESSION['login'] = 'Lutek';
//echo $_SESSION['godzina'];
//echo $_SESSION['login'];
?>