<html>
    <head>
        <!-- Titulo de pagina -->
         <title>Registrar Dependencias</title>
    </head>
    <body>
        <?php
             include '../conexion/conexion.php';
             //recibir datos
             $nit = $_POST["nit"];
             $dep=$_POST["dep"];
            $insertar="INSERT INTO tabladependencias(NitEmpresa, DepDescripcion) VALUES('$nit','$dep')"; 
            $resultado = mysqli_query($conexion,$insertar);  
             // cerrar conexion
             mysqli_close($conexion);
            echo"<script>alert('Informacion Ingresada');   self.location.href='../formulario/formulariodependencia.php';
             </script>";
        ?>
        
        </body>
</html>