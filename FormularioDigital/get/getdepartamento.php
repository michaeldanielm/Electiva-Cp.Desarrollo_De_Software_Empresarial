<?php
include '../conexion/conexion.php';
$nit=$_POST['NitEmpresa'];
$consultaM="SELECT IdDependencia, DepDescripcion FROM `tabladependencias` WHERE `NitEmpresa`=$nit ORDER BY DepDescripcion ASC";
     $resM=mysqli_query($conexion,$consultaM);
$html= "<option value='0'>Seleccionar Departamento</option>";

while($rowM = mysqli_fetch_assoc($resM))
	{
		$html.= "<option value='".$rowM['IdDependencia']."'>".$rowM['DepDescripcion']."</option>";
	}
	
	echo $html;
?>