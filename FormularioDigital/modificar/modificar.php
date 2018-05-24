<!DOCTYPE html>
<html lang="es">
    <head>
       <!-- titulo -->
        <title>Formulario Empresa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <!-- Ejecuta el css -->
        <link rel="stylesheet" type="text/css" href="../css/estilo.css" >
        <!-- Valida la informacion-->
        <script src="js/validar.js"></script>
    </head>
    
    <body>
       <header>
        <div class="contenedor">
             <nav> 
               
                <ul >
                   <li><a href="formularioempresa.html"><span class="icon-user"></span>Digital Binary </a></li>
                   
                    
                 <li><a href="formularioempresa.html">Registrate</a></li>
                 <li> 
                  <a href="formulario/formularioempleado.php"><span class="icon-download"></span>Empleado</a>
                  <ul>
                      <li><a href="formulario/entradaindicado.php">Indicador</a></li>
                   <li><a href="formulario/datoindicador.php">Reporte</a></li>
                  </ul></li>
                   
                  <li><a href="formulario/formularioMisVis.php">Mision Y Vision</a></li>
                  <li> <a href="formulario/formularioMetTac.php">Metas y Tacticas</a></li>
                   <li><a href="formulario/formularioObjEst.php">Objetivos y Estrategias</a></li>
                   <li><a href="formulario/formulariodependencia.php">Dependencia</a></li>
                 </ul>
                 </nav>
                 </div>
</header>
       <!-- Ejecuta la validacion y registra la informacion -->
    </body>
    <?php
    $Id=$_REQUEST['Id'];
    include'../conexion/conexion.php';
    $sentencia="SELECT * FROM `tablaempresas` WHERE Id='$Id'";
    $resultado=mysqli_query($conexion,$sentencia);
    $row=mysqli_fetch_assoc($resultado);
    ?>
<form method="post" action="modificarempresa.php?Id=<?php echo $row['Id'];?>" onsubmit="return validar();"  >
               <link rel="stylesheet" type="text/css" href="css/estilo.css">
                <h2>Modificar Empresa</h2>
            <input type="text" id="nit" name="nit" placeholder="Nit" value="<?php echo $row['Nit'];?>" required>
            <input type="text" id="nom" name="nom" placeholder="Nombre" value="<?php echo $row['Nombre'];?>"required>
            <input type="text" id="dir" name="dir" placeholder="Direccion" value="<?php echo $row['Direccion'];?>" required>
            <input type="text" id="tel" name="tel" placeholder="Telefono" value="<?php echo $row['Telefono'];?>" required>
            <input type="text" id="corr" name="corr" placeholder="Correo" value="<?php echo $row['Email'];?>" required>
            
            <!--Crea el boton-->
            <input type="submit" value="Modificar" id="boton">
        </form>
        
        <footer>
          <div class="contenedor">
              <p class="copy"> 
              Camisetas Style &copy; 2017</p>
              <div class="sociales">
                 <a class="icon-facebook" href="#"></a>
                 <a class="icon-gplus" href="#"></a>
              </div>
          </div>
      </footer>

</html>