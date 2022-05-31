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
session_start();
$login = $_POST['login'];
$haslo = $_POST['haslo'];
if($login=='andrzej' && $haslo=='ab12')
{
	$_SESSION['login']=$login;
	include("dlazalogowanych.php");
}elseif
	($login=='zwykly' && $haslo=='klient')
{
	$_SESSION['login']=$login;
	include("dlaniezalogowanych.php");

}else{
	echo "Zły login lub hasło spróbuj pownownie <br> <a href='fajnyformularz.php'> Powrót</a>";
}






//$_SESSION['godzina']='15.00';
//$_SESSION['login'] = 'Lutek';
//echo $_SESSION['godzina'];
//echo $_SESSION['login'];
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