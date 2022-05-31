<?php 
$nazwa = $_FILES["plik"]["name"];
$tname = $_FILES["plik"]["tmp_name"];
$typ = $_FILES["plik"]["type"];
echo $nazwa;

$kod = $_POST["kod"];


//if ($typ!="image/jpeg" && $kod)
//{
//	echo "nie mozesz przeslac tego pliku"
//}
//else
//{
move_uploaded_file($tname,$_SERVER['DOCUMENT_ROOT'].'/kh/pliki/'.$nazwa);
//echo "Plik wysłany";
//}
 ?>