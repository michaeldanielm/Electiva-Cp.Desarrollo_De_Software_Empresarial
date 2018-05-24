<html>
    <head>
        <!-- Titulo de pagina -->
         <title>Registrar Metas y Tacticas</title>
    </head>
    <body>
        <?php
             include '../conexion/conexion.php';
             //recibir datos
             $nit = $_POST["nit"];
             $meta=$_POST["met"];
             $tactica=$_POST["tac"];
            $insertar="INSERT INTO tablametas(NitEmpresa, Meta) VALUES('$nit','$meta')"; 
            $resultado = mysqli_query($conexion,$insertar);
            $insertar="INSERT INTO tablatacticas(NitEmpresa, Tactica) VALUES('$nit','$tactica')";
            $resultado = mysqli_query($conexion,$insertar);   
             // cerrar conexion
             mysqli_close($conexion);
        echo"<script>alert('Informacion Ingresada');   self.location.href='../formulario/formularioMetTac.php';
             </script>";
        ?>
        
        </body>
</html>