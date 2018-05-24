        <?php
             include '../conexion/conexion.php';
             $nit = $_POST["cbx_empresa"];
             $dep=$_POST["cbx_departamento"];
             $cod = $_POST["cod"];
             $nombre = $_POST["nom"];
             $apellido = $_POST["ape"];
             $direccion = $_POST["dir"];
             $telefono = $_POST["tel"];
             $correo = $_POST["corr"];
             //Verificar si el nit ya se encuentra registrado
                 $insertar ="INSERT INTO `tablaempleados`(CodigoEmpleado, NombreEmpleado, ApellidoEmpleado, DireccionEmpleado, TelefonoEmpleado, EmailEmpleado,  IdDep, NitEmpresa) VALUES('$cod','$nombre','$apellido','$direccion','$telefono','$correo','$dep','$nit')";
              $resultado = mysqli_query($conexion,$insertar);  
             // cerrar conexion 
        echo"<script>alert('Informacion Ingresada');   self.location.href='../formulario/formularioempleado.php';
             </script>";
             mysqli_close($conexion);
        ?>
