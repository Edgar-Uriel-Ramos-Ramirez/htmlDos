<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosCalculadoraJS.css">
    <title>Calculadora</title>
</head>
<body>
    <script src="operaciones.js"></script>
    
    <header class="titulo_PrincipalDis">
        <h1>Calculadora</h1>
    </header>

    <div class="Global">

        <div class="content">
                <div class="problemas">
                    <button onclick="btnCalcu('sum');" class="colorBtn">Suma</button>
                </div>
                <br>
                <br>
                <div onclick="btnCalcu('resta');" class="problemas">
                    <button class="colorBtn">Resta</button>
                </div>
                <br>
                <br>
                <div onclick="btnCalcu('multi');" class="problemas">
                    <button class="colorBtn">Multiplicación</button>
                </div>
                <br>
                <br>
                <div onclick="btnCalcu('div');" class="problemas">
                    <button class="colorBtn">Division</button>
                </div>
                <br>
                <br>
                <div onclick="btnCalcu('prom');" class="problemas">
                    <button class="colorBtn">Promedio</button>
                </div>
                <br>
                <br>
                <div onclick="btnCalcu('devia');" class="problemas">
                    <button class="colorBtn">Desviación Estandar</button>
                </div>
                <br>
                <div class="problemas">
                    <button class="colorBtn"><a href="index.php" class="letraEstilo">Página Principal</a></button>
                </div>
    
            </div>
        <br>
        <br>
        <br>
            <div id="sum" class="resultado" hidden>
                <label for="numUno"> Numero 1: </label>
                <input type="number" name="numUno" id="sum_numUno">
                <br>
                <br>
                <label for="numDos"> Numero 2: </label>
                <input type="number" name="numDos" id="sum_numDos">
                <br>
                <br>
                <button onclick="suma_obtener();">Obtener Resultado</button>
                <br>
                <br>
                <h1 id="sum_result"></h1>
            </div>
        
            
            <div id="resta" class="resultado" hidden>
                <label for="numUno"> Numero 1: </label>
                <input type="number" name="numUno" id="resta_numUno">
                <br>
                <br>
                <label for="numDos"> Numero 2: </label>
                <input type="number" name="numDos" id="resta_numDos">
                <br>
                <br>
                <button onclick="resta_obtener();">Obtener Resultado: </button>
                <br>
                <br>
                <h1 id="resta_result"></h1>
            </div>
        
            
            <div id="multi" class="resultado" hidden>
                <label for="numUno"> Numero 1: </label>
                <input type="number" name="numUno" id="multi_numUno">
                <br>
                <br>
                <label for="numDos"> Numero 2: </label>
                <input type="number" name="numDos" id="multi_numDos">
                <br>
                <br>
                <button onclick="multiplicacion_obtener();">Obtener Resultado: </button>
                <br>
                <br>
                <h1 id="multi_result"></h1>
            </div>
        
            
            <div id="div" class="resultado" hidden>
                <label for="numUno"> Numero 1: </label>
                <input type="number" name="numUno" id="div_numUno">
                <br>
                <br>
                <label for="numDos"> Numero 2: </label>
                <input type="number" name="numDos" id="div_numDos">
                <br>
                <br>
                <button onclick="division_obtener();">Obtener Resultado: </button>
                <br>
                <br>
                <h1 id="div_result"></h1>
            </div>
        
            
            <div id="prom" class="resultado" hidden>
                <label for="numUno">Cantidad a calcular: </label>
                <input type="number" name="numUno" id="prom_numUno">
                <br>
                <br>
                <button onclick="promedio_obtener();">Obtener: </button>
                <br>
                <br>
                <h1 id="prom_result"></h1>
            </div>
        
            <div id="devia" class="resultado" hidden>
                <label for="numUno"> Cantidad a calcular: </label>
                <input type="number" name="numUno" id="devia_numUno">
                <br>
                <br>
                <button onclick="desviacion_obtener();">Obtener: </button>
                <br>
                <h1 id="devia_result"></h1>
            </div>
        </div>
</body>
</html>