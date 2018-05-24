<html>
    <head>
        <!-- Titulo de pagina -->
         <title>Registrar Reporte</title>
    </head>
    <body>
        <?php
             include '../conexion/conexion.php';
             //recibir datos
             $ind = $_POST["cbx_indicador"];
             $fec=$_POST["fec"];
             $val=$_POST["val"];
             $cod=$_POST["cbx_empleados"];
                echo "nit".$cod;
            $insertar="INSERT INTO tabladatos(CodEmpleado, IdIndicador, FechaReg, DatoIndicador) VALUES('$cod','$ind','$fec','$val')"; 
            $resultado = mysqli_query($conexion,$insertar);  
             // cerrar conexion
             mysqli_close($conexion);
        echo"<script>alert('Informacion Ingresada');   self.location.href='../formulario/formularioresponsable.php';
             </script>";
        ?>
        
        </body>
</html>