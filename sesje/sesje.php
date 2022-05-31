<?php
session_start();
$_SESSION['godzina']='15.00';
$_SESSION['login'] = 'Lutek';

echo $_SESSION['godzina'];
echo $_SESSION['login'];
?>