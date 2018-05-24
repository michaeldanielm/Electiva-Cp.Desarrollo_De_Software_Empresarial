<html>
    <head>
        <!-- Titulo de pagina -->
         <title>Registrar Objetivos</title>
    </head>
    <body>
        <?php
             include '../conexion/conexion.php';
             //recibir datos
             $nit = $_POST["nit"];
             $objetivo=$_POST["obj"];
             $estrategia=$_POST["est"];
                echo "nit".$nit;
            echo "objetivo".$objetivo;
            $insertar="INSERT INTO tablaobjetivos(NitEmpresa, Objetivo) VALUES('$nit','$objetivo')"; 
            $resultado = mysqli_query($conexion,$insertar);
            $insertar="INSERT INTO tablaestrategias(NitEmpresa, Estrategia) VALUES('$nit','$estrategia')";
            $resultado = mysqli_query($conexion,$insertar);   
             // cerrar conexion
             mysqli_close($conexion);
        echo"<script>alert('Informacion Ingresada');   self.location.href='../formulario/formularioObjEst.php';
             </script>";
        ?>
        
        </body>
</html>