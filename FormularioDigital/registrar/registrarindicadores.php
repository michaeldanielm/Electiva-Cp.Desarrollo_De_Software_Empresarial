<?php
             include '../conexion/conexion.php';
             //recibir datos
             $obj = $_POST["cbx_objetivo"];
             $est = $_POST["cbx_estrategia"];
             $ind = $_POST["ind"];
             $tip = $_POST["tip"];
             $cat = $_POST["cat"];
             $per = $_POST["per"];
             $fechai = $_POST["fechaini"];
             $fechaf = $_POST["fechafin"];
             $min = $_POST["min"];
             $med = $_POST["med"];
             $alt = $_POST["alt"];
             $cod = $_POST["cbx_empleados"];
             //Verificar si el nit ya se encuentra registrado
                 $insertar ="INSERT INTO tablaindicadores(IdObj, IdEst, IndNombre, IndTipo, IndCategoria, IndPeriodicidad, IndInicio, IndFin, IndMinimo, IndMedio, IndMeta, EmpCodigo) VALUES('$obj','$est','$ind','$tip','$cat','$per','$fechai','$fechaf','$min','$med','$alt','$cod')";
              $resultado = mysqli_query($conexion,$insertar);  
             // cerrar conexion 
        echo"<script>alert('Informacion Ingresada');   self.location.href='../formulario/formularioindicadores.php';
             </script>";
             mysqli_close($conexion);
        ?>
