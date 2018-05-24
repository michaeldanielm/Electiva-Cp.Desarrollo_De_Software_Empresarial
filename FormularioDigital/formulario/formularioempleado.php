<?php
     include '../conexion/conexion.php';
     $consulta="SELECT Nit, Nombre FROM `tablaempresas` ORDER BY Nombre ASC";
     $res=mysqli_query($conexion,$consulta);
?>     

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario Empleado</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilo.css" type="text/css">
        <style>
          nav li li{
          width: 148%;
          }
        </style>     
        <script languaje="javascript" src="../js/jquery-3.2.1.min.js"></script>
        <script language="javascript">
        $(document).ready(function(){
		   $("#cbx_empresa").change(function () {		
              $("#cbx_empresa option:selected").each(function () {
                 NitEmpresa = $(this).val();
				 $.post("../get/getdepartamento.php", { NitEmpresa: NitEmpresa }, function(data){
				    $("#cbx_departamento").html(data);
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
       <!-- Ejecuta la validacion y registra la informacion -->
        <form method="post" action="../registrar/registraempleado.php"  >
           <h2>Registrar Empleado <Empleado></Empleado></h2>
           <div><select name="cbx_empresa" id="cbx_empresa" required >
              <option value = "0" disabled selected> Seleccione Empresa</option>
              <?php
              while($row = mysqli_fetch_assoc($res)){
              ?>
              <option value="<?php echo $row["Nit"]?>"> <?php echo $row["Nombre"]?> </option>
              <?php
              }
              ?>
              </select></div>
              
            <div> <select name="cbx_departamento" id="cbx_departamento" required >
            <option value = "0" disabled selected> Seleccione Departamento</ option>
            </select></div>
            <input type="text" id="cod" name="cod" placeholder="Codigo Empleado" required>
            <input type="text" id="nom" name="nom" placeholder="Nombre " required>
            <input type="text" id="ape" name="ape" placeholder="Apellido " required>
            <input type="text" id="dir" name="dir" placeholder="Direccion " required>
            <input type="text" id="tel" name="tel" placeholder="Telefono" required>
            <input type="text" id="corr" name="corr" placeholder="Correo" required>
            <input type="submit" value="Registrar" id="boton">
        </form>
    </body>
</html>