<?php
  require('../externosEncaPie/encabezadoAdmin.php');
  require('../conexion.php');
  
  if(isset($_POST['registrar'])){
    $nombre=$_POST['nombre'];
    $empresa=$_POST['companyname'];
    $email=$_POST['myemail'];
    $comentario=$_POST['mycomments'];

    $verificacion = "SELECT Nombre, Correo_Electronico FROM registro";
    $registros = mysqli_query($conexion,$verificacion);
    $bandera = false;

    if($registros->num_rows>0){ 
        while($fila = $registros->fetch_assoc()){
            if($fila["Nombre"]==$nombre && $fila["Correo_Electronico"]==$email){
              $bandera = false;
            }else{
              $bandera = true;
            }
        }
    }else{
        echo "Error";
    }
    
    if(!$bandera){
      echo '<script language="javascript">alert("Este usuario ya está agregado");</script>';
    }else{
      $consulta = "INSERT INTO registro VALUES(null,'$nombre','$empresa', '$email','$comentario')";
      if(mysqli_query($conexion,$consulta)){
        echo '<script language="javascript">alert("Se ha agregado correctamente");</script>';
      }else{
        echo '<script language="javascript">alert("No se ha agregado correctamente");</script>';
      } 
    }

}
?>
  <!-- Rotator -->
  <section id="main">
    <article>
      <h2>Register</h2>
      <p>To attend the Roux Academy 2016 Contemporary Art Conference, please complete the information below. </p>
    </article>
    <!-- About the event -->
    
    <article id="registrationform">
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <fieldset>
          <legend>Personal Info</legend>
          <ol>
            <li>
              <label for="myname">Name *</label>
              <input type="text" name="nombre" id="myname" autofocus placeholder="Last, First" required>
            </li>
            <li>
              <label for="companyname">Company Name</label>
              <input type="text" name="companyname" id="companyname">
            </li>
            <li>
              <label for="myemail">Email *</label>
              <input type="email" name="myemail" id="myemail" required autocomplete="off">
            </li>
            <li>
              <div class="grouphead">Request Type</div>
              <ol>
                <li>
                  <input type="radio" name="requesttype" value="question" id="question">
                  <label for="question">Question</label>
                </li>
                <li>
                  <input type="radio" name="requesttype" value="comment" id="comment">
                  <label for="comment">Comment</label>
                </li>
              </ol>
            </li>
            <li>
              <label for="mycomments">Comment</label>
              <textarea name="mycomments" id="mycomments"></textarea>
            </li>
            <li class="singleline">
              <input type="checkbox" id="subscribe" name="subscribe" checked="" value="yes">
              <label for="subscribe">Subscribe to our mailing list?</label>
            </li>
            <li>
              <label for="reference">How did you hear about us?</label>
              <select name="reference" id="reference">
                <option>Choose...</option>
                <option value="friend">A friend</option>
                <option value="facebook">Facebook</option>
                <option value="twitter">Twitter</option>
              </select>
            </li>
          </ol>
          <input type="submit" value="Send" name="registrar">
        </fieldset>
      </form>
    </article>
  </section>
  <!-- maincontent -->
  
  <aside id="sidebar">
    <article id="artistlist">
      <h2>Featured Artists</h2>
      <p>Each year, nine individuals are honored as Featured Artists - each being granted his or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees.</p>
      <div class="pixgrid">
        <ul>
          <li><img src="../images/artists/Barot_Bellingham_tn.jpg" alt="Barot Bellingham"></li>
          <li><img src="../images/artists/Constance_Smith_tn.jpg" alt="Constance Smith"></li>
          <li><img src="../images/artists/Hassum_Harrod_tn.jpg" alt="Hassum Harrod"></li>
          <li><img src="../images/artists/Hillary_Goldwynn_tn.jpg" alt="Hillary Goldwynn"></li>
          <li><img src="../images/artists/Jennifer_Jerome_tn.jpg" alt="Jennifer Jerome"></li>
          <li><img src="../images/artists/Jonathan_Ferrar_tn.jpg" alt="Jonathan Ferrar"></li>
          <li><img src="../images/artists/LaVonne_LaRue_tn.jpg" alt="LaVonne LaRue"></li>
          <li><img src="../images/artists/Riley_Rewington_tn.jpg" alt="Riley Rewington"></li>
          <li><img src="../images/artists/Xhou_Ta_tn.jpg" alt="Xhou Ta"></li>
        </ul>
        <p><a class="link" href="../artists.php">Artist Info</a></p>
      </div>
    </article>
    <!-- Featured Artists -->    <!-- Coming to event --> 
  </aside>
  <!-- Sidebar -->
  <?php
include('../externosEncaPie/piePagina.php');
?>
</div>
</body>
</html>