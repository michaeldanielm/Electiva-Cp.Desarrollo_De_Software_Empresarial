<?php
include '../conexion/conexion.php';
$nit=$_POST['NitEmpresa'];
$consultaM="SELECT IdObjetivos, Objetivo FROM `tablaobjetivos` WHERE `NitEmpresa`=$nit";
$resM=mysqli_query($conexion,$consultaM);
$html= "<option value='0'>Seleccionar Objetivo</option>";

while($rowM = mysqli_fetch_assoc($resM))
	{
		$html.= "<option value='".$rowM['IdObjetivos']."'>".$rowM['Objetivo']."</option>";
	}
	
	echo $html;
?>