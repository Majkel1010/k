<!DOCTYPE html>
<html>
<head>
		<title>Warunki</title>
		<meta charset="utf-8">
		<script type="text/javascript">
		function uwaga()
		{
			document.querySelector("#ostrzezenie").innerHTML="Zmienne są różne";
		}	

		</script>
</head>
<body>
<div id="ostrzezenie" style="background-color: yellow;">
	a
</div>






<?php 
$x1 = 32;
$x2 = -3;

if (($x1==$x2) && ($x1>0 && $x2=0 )) 
{
	$suma = $x1+$x2;
	echo "Suma to: $suma";	
}
else
{
	echo "<script> uwaga() </script>";
}

?>

</body>
</html>