<?php
include '../conexion/conexion.php';
$nit=$_POST['NitEmpresa'];
$consultaM="SELECT * FROM `tablaempleados` WHERE `NitEmpresa`=$nit ORDER BY NombreEmpleado ASC";
$resM=mysqli_query($conexion,$consultaM);
$html= "<option value='0'>Seleccionar Empleado</option>";

while($rowM = mysqli_fetch_assoc($resM))
	{
		$html.= "<option value='".$rowM['CodigoEmpleado']."'>".$rowM['NombreEmpleado']."</option>";
	}
	
	echo $html;
?>