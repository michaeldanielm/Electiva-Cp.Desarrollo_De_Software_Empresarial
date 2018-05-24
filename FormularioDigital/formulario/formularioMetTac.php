<?php
  include '../conexion/conexion.php';
  $consulta="SELECT Nit, Nombre FROM `tablaempresas`";
  $res=mysqli_query($conexion,$consulta);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
       <!-- titulo -->
        <title>Formulario Metas y Tacticas</title>
        <meta charset="utf-8">
        <!-- Ejecuta el css -->
        <link rel="stylesheet" href="../css/estilo.css" type="text/css">
        <style>
          nav li li{
          width: 148%;
          }
        </style>
    </head>
    <body>
      
      <header>
         <div class="contenedor">
            <nav>  
                <ul>
                   <li><a href="../home.html"><span class="icon-user"></span>Digital Binary </a></li>            
                   <li><a><span class="icon-download"></span>Empresa</a>
                      <ul>
                        <li><a href="../formularioempresa.html">Registrar</a></li>
                        <li><a href="../formulario/formularioMisVis.php">Mision Y Vision</a></li>
                        <li> <a href="../formulario/formularioMetTac.php">Metas y Tacticas</a></li>
                        <li><a href="../formulario/formularioObjEst.php">Objetivos y Estrategias</a></li>
                      </ul>
                   </li>
                   <li><a><span class="icon-download"></span>Ingresar</a>
                      <ul>
                         <li><a href="../formulario/formulariodependencia.php">Departamento</a></li>
                         <li><a href="../formulario/formularioempleado.php">Empleado</a></li>
                      </ul>
                   </li>
                   <li><a><span class="icon-download"></span>Indicadores</a>
                      <ul>
                        <li><a href="../formulario/formularioindicadores.php">Indicador</a></li>
                        <li><a href="../formulario/formularioresponsable.php">Registro</a></li>
                      </ul>
                   </li>
                   <li><a><span class="icon-download"></span>Reportes</a>
                      <ul>
                        <li><a href="../reporte/reporteempresa.php">Empresa</a></li>
                        <li><a href="../reporte/indicador.php">Reporte</a></li>
                      </ul>
                   </li>
                 </ul>
             </nav>
          </div>
      </header>
       <!-- Ejecuta la validacion y registra la informacion -->
      <form method="post" action="../registrar/registrarmettac.php" onsubmit="return validar();"  >
         <h2>Registrar Metas y Tacticas</h2>
            <select name="nit" >
            <option value = "" disabled selected> Seleccione Empresa 
            </ option>
            <?php
               while($row = mysqli_fetch_assoc($res)){
            ?>
            <option value="<?php echo $row["Nit"]?>"> <?php echo $row["Nombre"]?> </option>
            <?php
            }
            ?>
            </select>  
            <textarea id="met" name="met" placeholder="Escriba las metas de su empresa" required></textarea>
            <textarea id="tac" name="tac" placeholder="Escriba las tacticas de su empresa" required></textarea>
            <input type="submit" value="Registrar" id="boton">
        </form>
    </body>
</html>