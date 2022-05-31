<?php
if (isset($_SESSION['login']))
 {

$login = $_SESSION['login'];	
 echo	"To jest tylko dla zalogowanych";
 echo  	"Witaj $login";
}else{
	echo "Zaloguj się";

}


?>