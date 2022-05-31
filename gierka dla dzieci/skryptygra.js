function losuj()
{
//losowanie liczb
document.getElementById('wynik').value="";
	let x1=20*Math.random() 
	let x1Zaokr = Math.round(x1)

	let x2=20*Math.random()
	let x2Zaokr = Math.round(x2)
//koniec losowanie liczb
	document.getElementById('liczba1').value=x1Zaokr;
	document.getElementById('liczba2').value=x2Zaokr;
//losowanie znaku
	let los = Math.round(Math.random());
	 znak = "";
		if(los==0)
		{
		 znak="+";
		}	
		else
		{
		 znak="-";
		}
	document.getElementById("dzialanie").value=znak;
}

function sprawdzenie()
{
	let x1=document.getElementById("liczba1").value;
	let x2=document.getElementById("liczba2").value;
	let dobryWynik = eval(x1+znak+x2);
	let mojWynik = document.getElementById("wynik").value;
	if(dobryWynik==mojWynik)
	{
document.getElementById("wynik").style.color="green";
document.getElementById("dziecko").innerHTML="<img src=wesoledziecko.jpg>";
document.getElementById("komunikat").style.display="block";
document.getElementById("komunikat").innerHTML="Jesteś genialny";
	}
	else
	{
document.getElementById("wynik").style.color="red";
document.getElementById("dziecko").innerHTML="<img src=smutnedziecko.jpg>";
document.getElementById("komunikat").style.display="block";
document.getElementById("komunikat").innerHTML="Jesteś głupi";
	}
}