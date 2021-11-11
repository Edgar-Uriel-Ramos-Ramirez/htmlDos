<?php

  session_start();
  if(!isset($_SESSION['usuario'])){
        header("Location: index.php");
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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Roux Conference: Artists</title>
<link rel="stylesheet" href="/Unidad 3/roux_academy/css/style.css">
<link rel="stylesheet" href="/Unidad 3/roux_academy/css/estilosPersonal.css">
</head>
<body id="page_artists">
<div class="wrapper">
  <header>
    <div class="branding"> <img src="/Unidad 3/roux_academy/images/ralogo_monogram.png" alt="Logo">
      <p>Roux Academy<br>
        Art • Media • Design</p>
    </div>
    <div class="description">
      <h1>Roux Academy 2016 Art Conference</h1>
      <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of 
        lectures by world-renowned art scholars and artists, and seven days and nights of gallery exhibits featuring the best in contemporary art, 
        including painting, sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.</p>
        <h2 class="edicionUsuario" ><?php echo "USUARIO:  " .  $_SESSION['usuario'];?></h2>
    </div>
    <nav>
      <ol>
        <li><a href="/Unidad 3/roux_academy/indexAdmin.php" class = "estilosTitulosAdmin">HOME</a></li>
        <li><a href="/Unidad 3/roux_academy/artistsAdmin.php" class = "estilosTitulosAdmin">ARTISTS</a></li>
        <li><a href="/Unidad 3/roux_academy/schedule/indexAdmin.php" class = "estilosTitulosAdmin">SCHEDULE</a></li>
        <li><a href="/Unidad 3/roux_academy/venueAdmin.php" class = "estilosTitulosAdmin">VENUE/TRAVEL</a></li>
        <li><a href="/Unidad 3/roux_academy/impresionRegistro.php" class = "estilosTitulosAdmin">IMPRESION DE REGISTROS</a></li>
        <li><a onclick="cerrar()"; class = "estilosNombreAdmin" >Cerrar Sesion</a></li>
      </ol>
    </nav>
  </header>
  <div id="rotator"> <img src="/Unidad 3/roux_academy/images/art01.jpg" alt="Artwork from show"> </div>