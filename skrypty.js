function tablica() 
{
let tab = ['kiwi','jablko','dynia','cukinia','cebula'];

let los=Math.round((5*Math.random()));
let nazwa = tab[los]+".jpg";

document.getElementById('owoc').innerHTML="<img src=owoce/"+nazwa+">";
console.log(nazwa);


}