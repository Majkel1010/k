<?php 
$email = "prezydent@polska.pl";

$poz1 = strpos($email, "@");
$poz2 = strpos($email, ".");
$ciag = substr($email, $poz1+1,$poz2);
//$data = "1992/11/19";


//$rok = substr($data, 0, 4);
//$dl = strlen($data);
//$poz = strpos($email, ".");
echo "$poz1 $poz2 $ciag";


 ?>