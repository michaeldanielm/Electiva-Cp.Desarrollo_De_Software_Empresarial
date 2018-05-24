<?php
             include '../conexion/conexion.php';
             //recibir datos
             $Id=$_REQUEST['Id'];

             //Verificar si el nit ya se encuentra registrado
             $consulta="DELETE FROM `tablaempresas` WHERE Id='$Id'";
             $res=mysqli_query($conexion,$consulta);
             $filas=mysqli_num_rows($res);
             //verifica el nit
             if($filas>0){    
             echo"<script>alert('El nit ya se encuentra registrado');   self.location.href='../formularioempresa.html';
             </script>";
             }
             else{
                 echo"<script>alert('Empresa Eliminada');   self.location.href='../reporte/reporteempresa.php'
             </script>";
                  
             }
             //cerrar consulta
             mysqli_free_result($res);
             // cerrar conexion
             mysqli_close($conexion);
        ?>