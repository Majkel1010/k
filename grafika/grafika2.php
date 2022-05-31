<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Grafika</title>
	<style type="text/css">
		.doCanvas{
			background-color: skyblue;
		}
	</style>
</head>
<body>
<canvas id="plotno" width="600" height="600" class="doCanvas">
</canvas>
<script type="text/javascript">
	const obszar = document.querySelector("#plotno");
	const rysunek = obszar.getContext("2d");
	rysunek.beginPath();
	rysunek.moveTo(0,300);
	rysunek.lineTo(600,300);
	rysunek.stroke();

	rysunek.beginPath();
	rysunek.moveTo(300,0);
	rysunek.lineTo(300,600);
	rysunek.stroke();

//	for( let i=-300; i<=300; i++)
//	{
//	let x=i;
//	let y=-0.5*x-20
//	rysunek.fillRect(x+300,300-y,2,2);

//	}

	//rysunek.fillRect(40+300,300-40,2,2);
	//rysunek.strokeRect(10,10,100,100);
	//rysunek.strokeRect(80,80,1,1);

</script>
	
<?php
$x = $_POST ["wartoscx"]+300;
$y =300 - $_POST ["wartoscy"];

echo "X=$x  Y=$y";

?>




</body>
</html>