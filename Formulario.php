<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosFormulario.css">
    <title>Survey for Product X</title>
</head>
<body>
    <form action="formularioDos.php">
    <div class="celdaUno">
        <div class="titulo">
            <h1>Survey for Product X</h1>
            <p>Tu correo se registrará cuando envíes este formulario</p>
            <p>¿No es tuya la direccion <b>1930079@upv.edu.mx</b>?&nbsp;&nbsp;&nbsp;<a href="#">Cambiar de Cuenta</a></p>
            <p style="color:rgb(255, 0, 0)">*Obligatorio</p>
        </div>
    </div>

    <div class="celdaDos">
        <div class="formularioUno">
            <label class="lableNombre">Nombre <font style="color:rgb(255, 0, 0);">*</font></label><br></br>
            <input type="text" class="textR" autocomplete="of" placeholder="Tu respuesta">
        </div>
    </div>

    <div class="celdaTres">
        <label class="labelCarro">What car do you prefer<font style="color:rgb(255, 0, 0);">*</font></label><br></br>

        <div class="formularioDos">

            <img src="imgsFormulario/carroUno.jpg" class="autoUno" style="float:left;">
            <input type="radio" name="carroUno" id="carroUno"><label class="labelAutoUno">Mini car</label>

            <img src="imgsFormulario/carroDos.jpg" class="autoDos" style="float: right;">
            <input type="radio" name="carroDos" id="carroDos"><label class="labelAutoUno">Opción 2</label>
            

            <img src="imgsFormulario/CarroTres.jpg" class="autoTres">
            <input type="radio" name="CarroTres" id="CarroTres"><label class="labelAutoUno">Opción 3</label>
        </div>
    </div>

    <div class="celdaCuatroBtn">
        <div class="boton">
            <input type="submit" value="Siguiente" class="btn">
        </div>
    </div>

    </form>
</body>
</html>