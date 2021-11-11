<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosFormulario.css">
    <link rel="stylesheet" href="estilosFormularioDos.css">
    <title>Survey for Product X</title>
</head>
<body>
    <form action="index.php">
        <div class="celdaUno">
            <div class="titulo">
                <h1>Survey for Product X</h1>
                <p>Tu correo se registrará cuando envíes este formulario</p>
                <p>¿No es tuya la direccion <b>1930079@upv.edu.mx</b>?&nbsp;&nbsp;&nbsp;<a href="#">Cambiar de Cuenta</a></p>
                <p style="color:rgb(255, 0, 0)">*Obligatorio</p>
            </div>
        </div>

        <div class="celdaExtra">
            <div class="titulo">
                <label class="titulo">Selección sin Titulo</label><br></br>
            </div>
        </div>

        <div class="celdaDosPagDos">
            <div class="formularioUnoPagDos">

                <label class="lableTitulo">What's type of devides de you hace at home?</label><br></br>
                
                <input type="checkbox" name="tablet" id="tablet" value="1">
                <label for="tablet">Tablet </label><br><br>
                
                <input type="checkbox" name="smartphone" id="smartphone" value="2">
                <label for="smartphone">Smartphone </label><br><br>
                
                <input type="checkbox" name="pc" id="pc" value="3">
                <label for="pc">Pc </label><br><br>
                
                <input type="checkbox" name="lap" id="lap" value="4">
                <label for="´lap">Laptop </label><br><br>
                
                <input type="checkbox" name="otroH" id="otroH" value="5">
                <label for="otroH">Otro: </label>
                <input type="text" name="otro" id="otro" class="otro">
            </div>
        </div>

        <div class="celdaTresPagDos">
            <div class="formularioDosPagDos">
                <label for="desplegable">What's your career?</label><br><br>
                <select name="desplegable" id="desplegable" required>
                    <option value="0">Elige</option>
                    <option value="1">ITI</option>
                    <option value="2">LAyGE</option>
                    <option value="3">ITM</option>
                    <option value="4">ISA</option>
                </select>
            </div>
        </div>

        <div class="celdaCuatroPagDos">
            <div class="formularioTresPagDos">
                <label >Write your commets:</label><br><br>
                <textarea name="cometarios" id="cometarios" cols="80" rows="5" placeholder="cometarios"></textarea>
            </div>
        </div>

        <div class="celdaCincoPagDos">
            <div class="formularioCuatroPagDos">
                <label >what's you level of english?</label><br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="nivelOpciones">1</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="nivelOpciones">2</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="nivelOpciones">3</label>
                
                <br></br>

                <label >Basic</label>

                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="level" id="level">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="level" id="level">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="level" id="level">

            </div>
        </div>

        <div class="celdaSeisPagDos">
            <div class="formularioSeisPagDos">
                <label >Give us you opinion</label><br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;<label for="opinionOpciones">Bad</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="opinionOpciones">Regular</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="opinionOpciones">Good</label>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="opinionOpciones">Excelent</label>
                
                <br></br>

                <label >Rom service</label>
                

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="level" id="level">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="level" id="level">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="level" id="level">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="level" id="level">
                
                <br></br>

                <label >reservation service</label>
                

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="level" id="level">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;<input type="radio" name="level" id="level">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="level" id="level">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="level" id="level">
                
                <br></br>

                <label >Restaurant</label>
                

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="level" id="level">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="level" id="level">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="level" id="level">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="level" id="level">


            </div>
        </div>

        <div class="celdaSietePagDos">
            <div class="formularioSietePagDos">
                <label>Date of birth</label>
                <p>Fecha</p>
                <input type="date" name="fechaNacimiento" id="fechaNacimiento">
            </div>
        </div>

        <div class="celdaOchoBtnPagDos">
            <div class="boton">
                <input type="submit" value="Enviar" class="btn">
            </div>
        </div>
    </form>
</body>
</html>