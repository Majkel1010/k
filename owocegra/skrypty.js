kwotaPieniedzy=50;
function losowanieObrazkow() 
{
let tab = ['kiwi','jablko','dynia','cukinia','cebula','ananas'];
los1=Math.round((5*Math.random()));
let nazwa1 = tab[los1]+".jpg";
document.getElementById('owoc1').innerHTML="<img src=owoce/"+nazwa1+">";

los2=Math.round((5*Math.random()));
let nazwa2 = tab[los2]+".jpg";
document.getElementById('owoc2').innerHTML="<img src=owoce/"+nazwa2+">";

los3=Math.round((5*Math.random()));
let nazwa3 = tab[los3]+".jpg";
document.getElementById('owoc3').innerHTML="<img src=owoce/"+nazwa3+">";
zasadyGry();

}


function zasadyGry()
{
if ( (los1==los2 || los1==los3 || los2==los3)&& (los1!=los2 || los1!=los3) )
	{
		console.log("mala wygrana");
	}
if (los1==los2 && los2==los3)
{
	console.log("duza wygrana")
}
kwotaPieniedzy-=3
console.log(kwotaPieniedzy);
}