let x = prompt("Introduce su consumo en kWh."); 

let valorIntroducido = parseFloat(x);

let t1 = 0,t2 = 0,t3 = 0;

if (valorIntroducido > 600){
    t1 = (valorIntroducido-600)*5;
    valorIntroducido = 600;
}
if (valorIntroducido > 300){
    t2 = (valorIntroducido-300)*3;
    valorIntroducido = 300;
}
t3 = valorIntroducido;

let total = t1 + t2 + t3;

console.log(total);

alert(`La tarifa de tu consumo es:\nT1     = $${t3}\nT2     = $${t2}\nT3     = $${t1}\nTotal = $${total}`);