<?php
include '../conexion/conexion.php';
$nit=$_POST['NitEmpresa'];
$consultaM="SELECT IdEstrategia, Estrategia FROM `tablaestrategias` WHERE `NitEmpresa`=$nit";
$resM=mysqli_query($conexion,$consultaM);
$html1= "<option value='0'>Seleccionar Estrategia</option>";

while($rowM = mysqli_fetch_assoc($resM))
	{
		$html1.= "<option value='".$rowM['IdEstrategia']."'>".$rowM['Estrategia']."</option>";
	}
	
	echo $html1;
?>