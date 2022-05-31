function dodawanie()
{
let x = document.getElementById("LiczbaA").value; 
let y = document.getElementById("LiczbaB").value; 
let xNum = parseFloat(x) ;
let yNum = parseFloat(y) ;
let wynik = eval(xNum+znak+yNum) ;


document.getElementById("display").innerHTML = "Wynik wynosi " + wynik;
}

function potega()
{
let x = document.getElementById('LiczbaA').value;
let y = document.getElementById('LiczbaB').value;
let potega = Math.pow (x,y);
	document.getElementById("display").innerHTML =  "Potęga wynosi  "+potega; 
}

function zmienStyl(guzik)
{
let x=guzik.id;
document.getElementById(x).className="dlaGuzika";
console.log(x);
}
function losowanie(){
	let los1 = 50*Math.random();
	let losZaokr1=Math.round(los1);

	document.getElementById("pole1").value=losZaokr1;
		let los2 = 50*Math.random();
	let losZaokr2=Math.round(los2);

	document.getElementById("pole2").value=losZaokr2;
	
	
}
function dodajZnak(){
  let napis = document.getElementById("ekran").innerHTML;
  console.log(napis);
  let nowyEkran=napis+"d";
  document.getElementById("ekran").innerHTML=nowyEkran;

}

function zmienStylponajechaniu(guzik){
let x=guzik.id;
document.getElementById(x).className="ponajchaniu";
console.log(x);
}
function zmienStylpozjechaniu(guzik){
    let x=guzik.id;
    document.getElementById(x).className="pozjechaniu";
    console.log(x);
    }

    