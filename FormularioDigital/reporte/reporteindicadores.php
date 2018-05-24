<!DOCTYPE html>
<html lang="es">
    <head>
       <!-- titulo -->
        <title>Formulario Dato Indicador</title>
        <style type="text/css">
            .forma{
    /*forma del recuadro*/
    width: 780px;
    margin: auto;
    background: #FCFBFB;
    padding: 10px 20px;
    box-sizing: border-box;
    margin-top: 110px;
    border-radius: 20px;
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
         <table border="1" bordercolor="black" aling="center">
<tr align="center">
<?php 
include '../conexion/conexion.php';
$nit=$_POST['cbx_indicador'];
    $cont=0;
$consultaM="SELECT FechaReg, DatoIndicador FROM `tabladatos` WHERE `IdIndicador`=$nit";
$resM=mysqli_query($conexion,$consultaM);
while($row = mysqli_fetch_assoc($resM)){
    
    $cont+=1;
}
    $resM=mysqli_query($conexion,$consultaM);
for ($x = 0; $x<=12 ; $x++){
    if($x==0){
        ?>
        <td width="100"><?php echo "Fecha" ?> </td>
        <?php
    }
    else{
    ?>
    <td width="40"><?php echo $x ?> </td>
        <?php
    }
}

?>
</tr>
<?php
for($y = 1; $y<=$cont ; $y++){
    while($row = mysqli_fetch_assoc($resM)){
?>
<tr align="center"> <?php
for ($x = 0; $x<=12 ; $x++){
    $foo = false;
    if($y==1&&$x==0){
        $foo = true;
        ?>
        <td width="100" height="30" bgcolor=#ECE1DF height="15"><?php echo $row["FechaReg"]?></td>
        <?php
    }
        
		if ($x == $row["DatoIndicador"] && $row["DatoIndicador"]<=4) 
		{
            $foo = true;
			?>
			<td width="50" bgcolor="#FF5733" height="15"></td>
			<?php
		}
    if ($x == $row["DatoIndicador"] && $row["DatoIndicador"]<=8 && $row["DatoIndicador"]>=5) 
		{
        $foo = true;
			?>
			<td width="50" bgcolor="#F0FB06" height="15"></td>
			<?php
		}
    if ($x == $row["DatoIndicador"] && $row["DatoIndicador"]>=9) 
		{
        $foo = true;
			?>
			<td width="50" bgcolor="#06FB11" height="15"></td>
			<?php
		}
		if(!$foo){
            ?>
			<td width="50" bgcolor="#FFFFFF" height="15"></td>
			<?php
        }
}
    ?></tr><?php
    }
             }
?>
</table>
          
        </form>
    </body>
    