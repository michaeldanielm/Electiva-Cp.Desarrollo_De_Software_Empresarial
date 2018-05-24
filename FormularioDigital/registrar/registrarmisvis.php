<html>
    <head>
        <!-- Titulo de pagina -->
         <title>Registrar Mision y Vision</title>
    </head>
    <body>
        <?php
             include '../conexion/conexion.php';
             //recibir datos
             $nit = $_POST["nit"];
             $mision = $_POST["mis"];
             $vision = $_POST["vis"];
        
            $insertar="INSERT INTO tablamision(NitEmpresa, Mision) VALUES('$nit','$mision')"; 
            $resultado = mysqli_query($conexion,$insertar);
            $insertar="INSERT INTO tablavision(NitEmpresa, Vision) VALUES('$nit','$vision')";
            $resultado = mysqli_query($conexion,$insertar);   
             // cerrar conexion
             mysqli_close($conexion);
        echo"<script>alert('Informacion Ingresada');   self.location.href='../formulario/formularioMisVis.php';
             </script>";
        ?>
        </body>
</html>