<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosIMC.css">
    <title>Calculo de IMC</title>
</head>
<body>
    <header class="titulo_Principal">
        <h1>CALCULADORA DE IMC</h1>
    </header>

    <script src="scriptIMC.js"></script>
    
    <main>
        <div class="pesoDiseño">
            <label for="datoUno">Peso: </label>
            <input type="number" name="datoUno" id="pesoAlt_datoUno"><label> Kg</label>
            <br>
            <br>
            <label for="datoDos">Altura: </label>
            <input type="number" name="datoDos" id="pesoAlt_datoDos"><label> mts</label>
            <br>
            <br>
            <button onclick="pesoAlt_obtener();">Calcular</button>
        </div>
    </main>
    <main>
        <div id="resultados" class="result">
            <h1 id="pesoAlt_result"></h1>
            <h1 id="categoria_result"></h1>
        </div>
        <br>
        <div class="botonPrincipal">
            <button><a href="index.php" class="letraBoton">Página Principal</a></button>
        </div>
    </main>
    
</body>
</html>