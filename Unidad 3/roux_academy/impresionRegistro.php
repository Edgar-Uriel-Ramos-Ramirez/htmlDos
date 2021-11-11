<?php
  require('externosEncaPie/encabezadoAdmin.php');
  if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
  }
  
    
  echo 
  "<script>
    function cerrar(){
      if(confirm('¿Realmente desea salir?')){
        document.location='cerrarSesion.php';
      }
  }
  </script>";
?>
<!-- Rotator -->
<section id="main">
  <div class="centrarTabla">
    <table class="estilosTabla">
      <thead>
        <tr>
          <th class="Titulos">Nombre</th>
          <th class="Titulos">Compañia</th>
          <th class="Titulos">Correo Electronico</th>
          <th class="Titulos">Comentario</th>
        </tr>
      </thead>
      
      <tbody>
        <?php
        require ('datosConsultarTabla.php');
        foreach ($requiereConsultarTabla as $felchita){?>
        <tr>
          <td class="TextoNombre"><?php echo $felchita['Nombre']?><br><br></td>
          <td class="Texto"><?php echo $felchita['Compañia']?><br><br></td>
          <td class="Texto"><?php echo $felchita['Correo_Electronico']?><br><br></td>
          <td class="TextoDos"><?php echo $felchita['Comentario']?><br><br></td>
        </tr>
      </tbody>
        <?php
      }
      ?>
    </table>
</div>
</section>
<?php
include('externosEncaPie/piePagina.php');
?>
</div>
</body>
</html>