<?php
     include '../conexion/conexion.php';
     $consulta="SELECT Nit, Nombre FROM `tablaempresas` ORDER BY Nombre ASC";
     $res=mysqli_query($conexion,$consulta);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
       <!-- titulo -->
        <title>Formulario Indicadores</title>
        <style>
            .input-48{
            width: 49.5%;
            display: inline;
            }
            .input-30{
            width: 32.5%;
                display: inline;
            }
            nav li li{
            width: 148%;
        </style>
        <meta charset="utf-8">
        <!-- Ejecuta el css -->
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <script languaje="javascript" src="../js/jquery-3.2.1.min.js"></script>
        <script language="javascript">
			$(document).ready(function(){
				$("#cbx_empresa").change(function () {
                    
					$("#cbx_empresa option:selected").each(function () {
						NitEmpresa = $(this).val();
						$.post("../get/getobjetivo.php", { NitEmpresa: NitEmpresa }, function(data){
							$("#cbx_objetivo").html(data);
						});            
					});
				})
			});
            $(document).ready(function(){
				$("#cbx_empresa").change(function () {
					$("#cbx_empresa option:selected").each(function () {
						NitEmpresa = $(this).val();
						$.post("../get/getestrategia.php", { NitEmpresa: NitEmpresa }, function(data){
							$("#cbx_estrategia").html(data);
						});            
					});
				})
			});
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

        </script>
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
       <!-- Ejecuta la validacion y registra la informacion -->
      <form method="post" action="../registrar/registrarindicadores.php"   >
          <h2>Registrar Indicador</h2>
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
              <div> <select name="cbx_objetivo" id="cbx_objetivo" required >
             <option value = "0" disabled selected> Seleccione Objetivo
                  </ option>
         </select></div> 
              
              <div> <select name="cbx_estrategia" id="cbx_estrategia" required >
             <option value = "0" disabled selected> Seleccione Estrategia
                  </ option>
         </select></div> 
            <input id="ind" name="ind" placeholder="Escriba del indicador" required>
          <select name="tip" required> 
                <option value = "" disabled selected> Seleccione tipo </ option> 
                <option value = "Eficiencia"> Eficiencia  </ option> 
                <option value = "Eficacia"> Eficacia </ option>
                </select> 
                <select name="cat" required>
                <option value = "" disabled selected> Seleccione categoria </ option> 
                <option value = "Estrategico"> Estrategico </ option> 
                <option value = "Evaluacion"> Evaluacion </ option> 
                <option value = "Revision"> Revision  </ option> 
                <option value = "Mantenimiento"> Mantenimiento </ option> 
          </select>
           <select name="per" required>
                <option value = "" disabled selected> Seleccione periodicidad </ option> 
                <option value = "Semanal"> Semanal </ option> 
                <option value = "Quincenal"> Quincenal </ option> 
                <option value = "Mensual"> Mensual  </ option>  
          </select>
           <input type="text" name="fechaini" placeholder="Fecha inicial" class="input-48" required>
            <input type="text" name="fechafin" placeholder="Fecha final" class="input-48" required>
            <input type="text" name="min" placeholder="Minimo" class="input-30" required>
            <input type="text" name="med" placeholder="Medio" class="input-30" required>
            <input type="text" name="alt" placeholder="Alto" class="input-30" required>
            <div> <select name="cbx_empleados" id="cbx_empleados" required >
             <option value = "0" disabled selected> Seleccione Empleado
                  </ option>
         </select></div>  
            <input type="submit" value="Registrar" id="boton">
        </form>
    </body>
</html>