<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesCalcAritmetica.css">
    <title>Calculadora</title>
</head>
<body onload = "principal();">
    <div class="result">
        <h1 id="result" ></h1>
    </div>
    <div class="prendeApaga">
        <input type="radio" name="onOff" id="encender" onclick="prendeRadio();" class="radioEncender"><label for="on">ON</label>
        <input type="radio" name="onOff" id="apagar" onclick="apagaRadio();" class="radioApagar"><label for="on">OFF</label>
    </div>
    <div class="cuerpo">
        <button id = "num_Siete" class="btnGlobal" onclick="numSiete();">7</button>
        <button id = "num_Ocho" class="btnGlobal" onclick="numOcho();">8</button>
        <button id = "num_Nueve" class="btnGlobal" onclick="numNueve();">9</button>
        <button id = "mas" class="btnGlobal" onclick="operacionSum();">+</button>
    </div>
    <div class="cuerpoDos">
        <button id = "num_Cuatro" class="btnGlobal" onclick="numCuatro();">4</button>
        <button id = "num_Cinco" class="btnGlobal" onclick="numCinco();">5</button>
        <button id = "num_Seis" class="btnGlobal" onclick="numSeis();">6</button>
        <button id = "menos" class="btnGlobal" onclick="operacionMenos();">-</button>
    </div>
    <div class="cuerpoTres">
        <button id = "num_Uno" class="btnGlobal" onclick="numUno();">1</button>
        <button id = "num_Dos" class="btnGlobal" onclick="numDos();">2</button>
        <button id = "num_Tres" class="btnGlobal" onclick="numTres();">3</button>
        <button id="multiplicar" class="btnGlobal" onclick="operacionMulti();">X</button>
    </div>
    <div class="cuerpoCuatro">
        <button id = "limpiarPantalla" class="btnGlobal" onclick = "limpieza();">C</button>
        <button id = "num_Cero" class="btnGlobal" onclick="numCero();">0</button>
        <button id="igual" class="btnGlobal" onclick="igualResultado();">=</button>
        <button id="dividir" class="btnGlobal" onclick="operacionDividir();">/</button>
    </div>

    <div class="botonRegresar">
        <br>
        <button><a href="index.php" class="letraColor">Página Principal</a></button>
    </div>

    <script src="scriptCalcAritmetica.js"></script>
</body>
</html>