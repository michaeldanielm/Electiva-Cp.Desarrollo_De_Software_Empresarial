<!DOCTYPE html>
<html lang="es">
    <head>
       <!-- titulo -->
        <title>Formulario Dato Indicador</title>
        <style type="text/css">
            .forma{
    /*forma del recuadro*/
    width: 850px;
    margin: auto;
    background: #FCFBFB;
    padding: 10px 20px;
    box-sizing: border-box;
    margin-top: 110px;
    border-radius: 20px;
}
            .modificar{
    /*Personalización boton*/
    background: #00FD1C;
    color: #fff;
    padding: 7px;
                border-radius: 6px;
                cursor: pointer;
}
            .eliminar{
    /*Personalización boton*/
    background: #FA0202;
    color: #fff;
    padding: 7px;
                border-radius: 6px;
                cursor: pointer;
}
          nav li li{
          width: 148%;
          }
            
            

        </style>
        <meta charset="utf-8">
        <!-- Ejecuta el css -->
        <link rel="stylesheet" href="../css/estilo.css" type="text/css">
        <!-- Valida la informacion-->
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
       <!-- https://www.youtube.com/watch?v=xq04F4hbZmo Ejecuta la validacion y registra la informacion -->
      <form method="post" class="forma">
         <div id="contenido">
             <table style="margin: auto; width:800px; border-collapse: separate; border-spacing:10px 5px">
                <thead>
                    <th>ID</th>
                    <th>Nit</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                </thead>
                <?php
                 include'../conexion/conexion.php';
                 $sentencia="SELECT * FROM `tablaempresas`";
                 $resultado=mysqli_query($conexion,$sentencia);
                 while($filas=mysqli_fetch_assoc($resultado)){
                     echo "<tr>";
                     echo "<td>"; echo $filas['Id']; echo "</td>";
                     echo "<td>"; echo $filas['Nit']; echo "</td>";
                     echo "<td>"; echo $filas['Nombre']; echo "</td>";
                     echo "<td>"; echo $filas['Direccion']; echo "</td>";
                     echo "<td>"; echo $filas['Telefono']; echo "</td>";
                     echo "<td>"; echo $filas['Email']; echo "</td>";
                     echo "<td> <a href='../modificar/modificar.php?Id=".$filas['Id']."'><button type='button' class='modificar'>Modificar</button></a></td>";
                     echo "<td> <a href='../eliminar/eliminarempresa.php?Id=".$filas['Id']."'><button type='button' class='eliminar'>Eliminar</button></a></td>";
                     echo "</tr>";
                 }
                 
                 ?>
                 
             </table>
         </div>
          
        </form>
    </body>