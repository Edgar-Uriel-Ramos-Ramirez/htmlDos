<?php
require('externosEncaPie/encabezadoAdmin.php');
  require 'conexion.php';
  echo 
    "<script>
      function cerrar(){
        if(confirm('¿Realmente desea salir?')){
          document.location='cerrarSesion.php';
        }
    }
    </script>";

  $requerirConsulta = "SELECT * FROM artist";
  $requerirConsulta = mysqli_query($conexion,$requerirConsulta);
  $array = mysqli_fetch_array($requerirConsulta);
  
?>
  <!-- Rotator -->
  <section id="main">
    <article>
      <h2>About the Event</h2>
      <p>Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees. It is truly an honor to be a CAC Featured Artist and many past students artists who were featured at CAC have gone on to brilliant careers in art.</p>
      <div class="artistgroup">
        <ul>
          <?php
            foreach($requerirConsulta as $obtener){?>
            <li>
              <h2> <?php echo $obtener['nombre'];?> </h2>
              <p> <img src=" <?php echo $obtener['imagen']; ?> " > <?php echo $obtener['descripcion']; ?> </p>
            </li>
            <?php } ?>
        </ul>
      </div>
      <!-- Artist Group --> 
    </article>
    <!-- Featured Artists --> 
    
  </section>
  <!-- maincontent -->
  
  <aside id="sidebar">
    <article>
      <h2>The Art</h2>
      <p>This year’s art pieces will inspire thought, conversation, imagination, and even criticism, as modern art often does. From critically-acclaimed works created by our Featured Artists, to a vast assortment of works by talented art students in schools across the world.</p>
      <div class="pixgrid">
        <ul>
          <li><img src="images/art/Barot_Bellingham_tn.jpg" alt="Art from Barot Bellingham"></li>
          <li><img src="images/art/Constance_Smith_tn.jpg" alt="Art from Constance Smith"></li>
          <li><img src="images/art/Hassum_Harrod_tn.jpg" alt="Art from Hassum Harrod"></li>
          <li><img src="images/art/Hillary_Goldwynn_tn.jpg" alt="Art from Hillary Goldwynn"></li>
          <li><img src="images/art/Jennifer_Jerome_tn.jpg" alt="Art from Jennifer Jerome"></li>
          <li><img src="images/art/Jonathan_Ferrar_tn.jpg" alt="Art from Jonathan Ferrar"></li>
          <li><img src="images/art/LaVonne_LaRue_tn.jpg" alt="Art from LaVonne LaRue"></li>
          <li><img src="images/art/Riley_Rewington_tn.jpg" alt="Art from Riley Rewington"></li>
          <li><img src="images/art/Xhou_Ta_tn.jpg" alt="Art from Xhou Ta"></li>
        </ul>
</div>
    </article>
    <!-- Featured Artists -->
    <article id="comingtoevent">
      <h2 class="highlight">Coming to the event?</h2>
      <h3>Check out our mobile site</h3>
      <p>Our mobile site contains schedules, and exhibit/ artist details, accessible simply by scanning QR codes located all around the venue exhibit halls.</p>
      <p><img src="images/iphone.png" alt="Mobile phone"></p>
      <p><a class="link" href="#">Roux mobile</a></p>
    </article>
    <!-- Coming to event --> 
  </aside>
  <!-- Sidebar -->
  <?php
include('externosEncaPie/piePagina.php');
?>
</div>
</body>
</html>