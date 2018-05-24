<?php
             include '../conexion/conexion.php';
             //recibir datos
             $Id=$_REQUEST['Id'];
             $nit = $_POST["nit"];
             $nombre = $_POST["nom"];
             $direccion = $_POST["dir"];
             $telefono = $_POST["tel"];
             $correo = $_POST["corr"];
             //Verificar si el nit ya se encuentra registrado
             $consulta="UPDATE tablaempresas SET Nit='$nit', Nombre='$nombre', Direccion='$direccion', Telefono='$telefono', Email='$correo' WHERE Id='$Id'";
             $res=mysqli_query($conexion,$consulta);
             $filas=mysqli_num_rows($res);
             //verifica el nit
             echo"<script>alert('Informacion Ingresada');   self.location.href='../reporte/reporteempresa.php'
             </script>";
             //cerrar consulta
             mysqli_free_result($res);
             // cerrar conexion
             mysqli_close($conexion);
        ?>