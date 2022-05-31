<?php
$nick = $_POST['nick'];

echo "$nick";
$plec = $_POST['plec'];
echo "$plec";


if (isset($_POST['js']))
{
	$js = $_POST['js'];
	echo "Programuję w $js";
}
else echo "Nie Programuję w Jscript";
$book = $_POST['ksiazka'];
echo "Ostanio czytałes $book";<br>
  ?>