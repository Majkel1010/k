<!DOCTYPE html>
<html>
<head>
	<title>Formularz</title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function sprawdzenie()
		{
			let nick = document.querySelector("#nick").value;
			let DlugoscNick = Nick.lenght;
			//sprawdzanie dlugosci nicku
			if (DlugoscNick<=3)
			{
				document.querySelector("#nick").style.border
				alert("Za krótki nick");
				return false;

			}else 
			return true;
		}
//sprawdzanie checkboxa
	let ch1 = document.querySelector("#nick").checked;
	let ch2 = document.querySelector("#nick").checked;
	let ch3 = document.querySelector("#nick").checked;
	console.log(ch1 ch2 ch3);

	</script>
</head>
<body>
<form action="pobierzdane.php" method="POST" onsubmit="return 
sprawdzenie()">
Podaj swój nick<input type="text" name="nick" placeholder="Podaj nick" ><br>

Podaj opis<textarea name="opis" > </textarea><br>

Kobieta<input type="radio" name="plec" value="k">
Mężczyzna<input type="radio" name="plec" value="m">
Inny<input type="radio" name="plec" value="i"><br>

JAVA<input type="checkbox" name="java" value="java">
PHP<input type="checkbox" name="php" value="php">
JS<input type="checkbox" name="js" value="js"><br><br>

Wybierz:
<select name="ksiazka" >
	<option value="Ogniem i mieczem">Ogniem i mieczem	</option>
	<option value="Pan Tadeusz">Pan Tadeusz 			</option>
	<option value="Zbrodnia i kara">Zbrodnia i kara 	</option> 
</select> <br>



<input type="submit" value="Wyślij dane">	
</form>


</body>
</html>