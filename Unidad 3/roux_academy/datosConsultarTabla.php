<?php

    require 'conexion.php';

    $requiereConsultar="SELECT * FROM registro";
    $requiereConsultarTabla=mysqli_query($conexion,$requiereConsultar);

?>