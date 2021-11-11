<?php
  require('externosEncaPie/encabezado.php');
  require 'conexion.php';

  $valido = false;
  if(isset($_POST['aceptar'])){
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['password'];

    if(!valida_usuario_bd($usuario, $contrasena, $conexion)){
      echo 'No es valido <br/>';
    }else{
      echo 'Si es valido <br/>';
      session_start();
      $valido = true;
      $_SESSION['usuario'] = $usuario;
      header('Location: indexAdmin.php');
    }
  }
  
?>
<!-- Rotator -->
<section id="main">
  <article id="thevenue">
    <h2>INICIAR SESION</h2>
    <article id="registrationform">
      <form action = "#" method = "POST">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" placeholder="Digite su Usuario">
        <br><br>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Digite su Contraseña">
        <br><br>
        <input type="submit" name="aceptar" value="Iniciar Sesion">
      </form>
    </article>
    <br>
  </article>
  <!-- The Venue -->
  <article id="hotellist">
      
    <ul>
      <li> <img src="images/hotel_phillips.jpg" alt="Hotel Phillips of Belltown">
        <div class="textgroup">
          <h3>Phillips of Bell town</h3>
          <p>Situated amongt the hip, youthful culture of Downtown Seattle, Phillips of Belltown is the place to 
              be any time of the day or night. Choose from Jazz and Rock music at the various music venues, and shop until you drop 
              at an assortment of thrift stores and upscale boutiques. The hotel itself is a historical gem, with architectural achievements in every beam, brick, and support.</p>
          <p><a class="link" href="#">Get Directions</a></p>
        </div>
      </li>
    </ul>
  </article>

</section>

<aside id="sidebar">
  <article id="artistlist">
    <div class="pixgrid">
      <ul>
        <li><img src="images/artists/Barot_Bellingham_tn.jpg" alt="Barot Bellingham"></li>
        <li><img src="images/artists/Constance_Smith_tn.jpg" alt="Constance Smith"></li>
        <li><img src="images/artists/Hassum_Harrod_tn.jpg" alt="Hassum Harrod"></li>
        <li><img src="images/artists/Hillary_Goldwynn_tn.jpg" alt="Hillary Goldwynn"></li>
        <li><img src="images/artists/Jennifer_Jerome_tn.jpg" alt="Jennifer Jerome"></li>
        <li><img src="images/artists/Jonathan_Ferrar_tn.jpg" alt="Jonathan Ferrar"></li>
        <li><img src="images/artists/LaVonne_LaRue_tn.jpg" alt="LaVonne LaRue"></li>
        <li><img src="images/artists/Riley_Rewington_tn.jpg" alt="Riley Rewington"></li>
        <li><img src="images/artists/Xhou_Ta_tn.jpg" alt="Xhou Ta"></li>
      </ul>
      <p><a class="link" href="#">View Artist Info</a></p>
    </div>
  </article>

</aside>

<?php
include('externosEncaPie/piePagina.php');
?>
</div>
</body>
</html>