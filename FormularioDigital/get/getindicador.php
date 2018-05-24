<?php
include '../conexion/conexion.php';
$id=$_POST['id_empleado'];
$consultaM="SELECT IdIndicador, IndNombre FROM `tablaindicadores` WHERE `EmpCodigo`=$id ";
$resM=mysqli_query($conexion,$consultaM);
$html= "<option value='0'>Seleccionar Indicador</option>";

while($rowM = mysqli_fetch_assoc($resM))
	{
		$html.= "<option value='".$rowM['IdIndicador']."'>".$rowM['IndNombre']."</option>";
	}
	
	echo $html;
?>