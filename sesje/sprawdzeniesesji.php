<?php
session_start();
$zm1 = $_SESSION['godzina'];
$zm2 = $_SESSION['login'];
echo "Jest godzina $zm1 login: $zm2";

?>