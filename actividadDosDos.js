let valor_Introducido = prompt("Ingrese su grupo, donde los valores esten separados por comas (,):");
let valor_Cambio = valor_Introducido.split(',').map(Number);

// Calculo de media
let n = valor_Cambio.length;
let total = 0;

valor_Cambio.forEach(function(element){
   total += element; 
});

let media = total/n;

// Calculo de varianza
let sum = 0;

valor_Cambio.forEach(function(element){
    sum += Math.pow(element-media, 2);
});

let varianza = sum/n;

// Desviacion estandar
alert(`Desviacion estandar:\n${Math.sqrt(varianza)}`);