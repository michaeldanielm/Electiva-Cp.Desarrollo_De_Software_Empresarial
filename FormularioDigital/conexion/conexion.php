<?php
   //conexion ala base de datos
   $servidor="localhost";
   $usuario="root";
   $contrasena="";
   $bd="formularioempresa";
   $conexion=mysqli_connect($servidor,$usuario,$contrasena,$bd);
  //informa si se conecto correctamente
  /*if(!$conexion){
      echo"<script>alert('No Conectado') 
      </script>";
   }
   else{
      echo"<script>alert('Conectado') 
      </script>";
   }*/
?>