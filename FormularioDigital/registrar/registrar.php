<html>
    <head>
        <!-- Titulo de pagina -->
         <title>Informacion Guardada</title>
    </head>
    <body>
        <?php
             include '../conexion/conexion.php';
             //recibir datos
             $nit = $_POST["nit"];
             $nombre = $_POST["nom"];
             $direccion = $_POST["dir"];
             $telefono = $_POST["tel"];
             $correo = $_POST["corr"];
             //Verificar si el nit ya se encuentra registrado
             $consulta="SELECT * FROM `tablaempresas` WHERE `Nit` = $nit";
             $res=mysqli_query($conexion,$consulta);
             $filas=mysqli_num_rows($res);
             //verifica el nit
             if($filas>0){    
             echo"<script>alert('El nit ya se encuentra registrado');   self.location.href='../formularioempresa.html';
             </script>";
             }
             else{
                 //Consulta para insertar
                 $insertar ="INSERT INTO `tablaempresas`(Nit,Nombre, Direccion, Telefono, Email) VALUES('$nit','$nombre','$direccion','$telefono','$correo')";
                 $resultado = mysqli_query($conexion,$insertar);
                 echo"<script>alert('Informacion Ingresada');   self.location.href='../formularioempresa.html'
             </script>";
                  
             }
             //cerrar consulta
             mysqli_free_result($res);
             // cerrar conexion
             mysqli_close($conexion);
        ?>
        </body>
</html>