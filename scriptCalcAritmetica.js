var varUno;
var varDos;
var sim;

var resultado = document.getElementById("result");
var limpiarPantalla = document.getElementById("limpiarPantalla");

var mas = document.getElementById("mas");
var menos = document.getElementById("menos");
var multiplicar = document.getElementById("multiplicar");
var dividir = document.getElementById("dividir");
var igual = document.getElementById("igual");

var num_Uno = document.getElementById("num_Uno");
var num_Dos = document.getElementById("num_Dos");
var num_Tres = document.getElementById("num_Tres");
var num_Cuatro = document.getElementById("num_Cuatro");
var num_Cinco = document.getElementById("num_Cinco");
var num_Seis = document.getElementById("num_Seis");
var num_Siete = document.getElementById("num_Siete");
var num_Ocho = document.getElementById("num_Ocho");
var num_Nueve = document.getElementById("num_Nueve");
var num_Cero = document.getElementById("num_Cero");

function numUno() {
    resultado.textContent = resultado.textContent + "1";
  }
  function numDos() {
    resultado.textContent = resultado.textContent + "2";
  }
  function numTres() {
    resultado.textContent = resultado.textContent + "3";
  }
  function numCuatro() {
    resultado.textContent = resultado.textContent + "4";
  }
  function numCinco() {
    resultado.textContent = resultado.textContent + "5";
  }
  function numSeis() {
    resultado.textContent = resultado.textContent + "6";
  }
  function numSiete() {
    resultado.textContent = resultado.textContent + "7";
  }
  function numOcho() {
    resultado.textContent = resultado.textContent + "8";
  }
  function numNueve() {
    resultado.textContent = resultado.textContent + "9";
  }
  function numCero() {
    resultado.textContent = resultado.textContent + "0";
  }

function operacionSum() {
    varUno = resultado.textContent;
    sim = "+";
    resultado.textContent = "";
  }
  
  function operacionMenos() {
    varUno = resultado.textContent;
    sim = "-";
    resultado.textContent = "";
  }
  function operacionMulti() {
    varUno = resultado.textContent;
    sim = "*";
    resultado.textContent = "";
  }
  function operacionDividir() {
    varUno = resultado.textContent;
    sim = "/";
    resultado.textContent = "";
  }
  function igualResultado() {
    varDos = resultado.textContent;
    determinar();
  }
  function limpieza(){
    resultado.textContent = "";
    varUno = 0;
    varDos = 0;
    sim = "";
  }

  function determinar() {
    var res = 0;
    switch (sim) {
      case "+":
        res = parseFloat(varUno) + parseFloat(varDos);
        break;
      case "-":
        res = parseFloat(varUno) - parseFloat(varDos);
        break;
      case "*":
        res = parseFloat(varUno) * parseFloat(varDos);
        break;
      case "/":
        res = parseFloat(varUno) / parseFloat(varDos);
        break;
    }
    resultado.textContent = "";
    varUno = 0;
    varDos = 0;
    sim = "";
    resultado.textContent = res;
  }

  function prendeRadio(){
    num_Uno.disabled = false;
    num_Dos.disabled = false;
    num_Tres.disabled = false;
    num_Cuatro.disabled = false;
    num_Cinco.disabled = false;
    num_Seis.disabled = false;
    num_Siete.disabled = false;
    num_Ocho.disabled = false;
    num_Nueve.disabled = false;
    num_Cero.disabled = false;

    mas.disabled = false;
    menos.disabled = false;
    multiplicar.disabled = false;
    dividir.disabled = false;
    limpiarPantalla.disabled = false;
    igual.disabled = false;
}

function apagaRadio(){
    num_Uno.disabled = true;
    num_Dos.disabled = true;
    num_Tres.disabled = true;
    num_Cuatro.disabled = true;
    num_Cinco.disabled = true;
    num_Seis.disabled = true;
    num_Siete.disabled = true;
    num_Ocho.disabled = true;
    num_Nueve.disabled = true;
    num_Cero.disabled = true;

    mas.disabled = true;
    menos.disabled = true;
    multiplicar.disabled = true;
    dividir.disabled = true;
    limpiarPantalla.disabled = true;
    igual.disabled = true;
}