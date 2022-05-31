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
	<h3>	Już dziś możesz zamawiać swoje ulubione pieczywo przez internet! Wypełnij poniższą ankietę, aby złozyć zamówienie:</h3>
<form action="piekarnia.php" method="POST">
	Podaj swoje:
	<br> Imię i Nazwisko:
	<input type="text" name="dane" placeholder="Imię i Nazwisko " ><br>
	Numer Kontaktowy:
	<input type="tel" name="telefon" placeholder=" 123456789" ><br>

Wybierz sposób dostarczenia:
Odbiór własny<input type="radio" name="sposob" value="Odbiór własny">
Dostawa<input type="radio" name="sposob" value="Dostawa"><br>
<h2>Nasza oferta zawiera:</h2>

Chleb pszenny<br>
Chleb żytni<br>
Chleb tostowy<br>
Bagietka<br>
Bułka Poznańska<br>
Bułka Kajzerka<br>
Bułka Graham<br>

<br>
Poniżej wpisz jakie produkty chcesz zamówić np.: Bagietka(x2), Chleb tostowy (1x)<br>
<input type="text" name="produkty" placeholder=" " >
<br>



<input type="submit" value="Wyślij dane">	

</form>
<br>
<br>
<br>
<br>
<br>
<br>
	
		<div>
			Zaloguj, aby poznać nasz sztab:
<form action="sesje1.php" method="POST" >
			Login:  <input type="text" name="login"><br>
			Hasło:  <input type="password" name="haslo"><br>
		<input type="submit" value="Zaloguj się">
</form>
		</div>


	</div>
	<div class="pasek">
		
	</div>
	<div class="stopka">
		Więcej o naszej piekarni możesz się dowiedzieć klikając w <a href="https://www.piekarniaklos.pl/"> link.</a>
			<br>

	</div>

</body>
</html>