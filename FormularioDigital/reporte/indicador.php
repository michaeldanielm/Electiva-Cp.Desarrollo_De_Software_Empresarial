<?php
     include '../conexion/conexion.php';
     $consulta="SELECT Nit, Nombre FROM `tablaempresas` ORDER BY Nombre ASC";
     $res=mysqli_query($conexion,$consulta);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
       <!-- titulo -->
        <title>Formulario Dato Indicador</title>
        <meta charset="utf-8">
        <!-- Ejecuta el css -->
        <link rel="stylesheet" href="../css/estilo.css" type="text/css">
        <style>
          nav li li{
          width: 148%;
          }
        </style>
        <!-- Valida la informacion-->
        <script languaje="javascript" src="../js/jquery-3.2.1.min.js"></script>
        <script language="javascript">
			$(document).ready(function(){
				$("#cbx_empresa").change(function () {
                    
					$("#cbx_empresa option:selected").each(function () {
						NitEmpresa = $(this).val();
						$.post("../get/getempleados.php", { NitEmpresa: NitEmpresa }, function(data){
							$("#cbx_empleados").html(data);
						});            
					});
				})
			});
            $(document).ready(function(){
				$("#cbx_empleados").change(function () {
					$("#cbx_empleados option:selected").each(function () {
						id_empleado = $(this).val();
						$.post("../get/getindicador.php", { id_empleado: id_empleado }, function(data){
							$("#cbx_indicador").html(data);
						});            
					});
				})
			});
        </script>
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
      <form method="post" name="combo" action="../reporte/reporteindicadores.php"   >
          <h2>Datos del indicador</h2>
              <div><select name="cbx_empresa" id="cbx_empresa" required >
                  <option value = "0" disabled selected> Seleccione Empresa
                  </ option>
                  <?php
                  while($row = mysqli_fetch_assoc($res))
                  {
                    ?>
                  <option value="<?php echo $row["Nit"]?>"> <?php echo $row["Nombre"]?> </option>
                  <?php
                }
                  ?>
              </select></div>
              
         <div> <select name="cbx_empleados" id="cbx_empleados" required >
             <option value = "0" disabled selected> Seleccione Empleado
                  </ option>
         </select></div>
             <div> <select name="cbx_indicador" id="cbx_indicador" required >
             <option value = "0" disabled selected> Seleccione Indicador
                  </ option>
         </select></div>
            <input type="submit" value="Entrar" id="boton">
        </form>
    </body>
</html>