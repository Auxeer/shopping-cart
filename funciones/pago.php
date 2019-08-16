<?php
include 'global/config.php';
include 'global/conexion.php';
include 'funciones/carrito.php';
 ?>


 <?php
       if($_POST){
         $total = 0;
         $SID=session_id();

         $Nombre =  $_POST['nnombre'];
         $Apellido =  $_POST['aapellido'];
         $Direccion =  $_POST['ddireccion'];
         $Nit =  $_POST['nnit'];
         $Pais=  $_POST['ppais'];
         $Departamento =  $_POST['ddepartamento'];
         $Correo = $_POST['eemail'];

         

         foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
           $total= $total + ($producto['PRECIO'] * $producto['CANTIDAD']);
         }

         $sentencia= $pdo->prepare("INSERT INTO tblventas
                             (clavetransaccion, nombre, apellido, direccion, nit, pais, departamento, fecha, correo, total, status)
                             VALUES
                             (
                             :ClaveTransaccion, :Nombre, :Apellido, :Direccion, :Nit, :Pais, :Departamento, NOW(), :Correo, :Total, 'pendiente');
                             ");

         $sentencia->bindParam(":ClaveTransaccion", $SID);
         $sentencia->bindParam(":Nombre", $Nombre);
         $sentencia->bindParam(":Apellido", $Apellido);
         $sentencia->bindParam(":Direccion", $Direccion);
         $sentencia->bindParam(":Nit", $Nit);
         $sentencia->bindParam(":Pais", $Pais);
         $sentencia->bindParam(":Departamento", $Departamento);
         $sentencia->bindParam(":Correo", $Correo);
         $sentencia->bindParam(":Total", $total);

         $sentencia->execute();
         $idVenta = $pdo->lastInsertId();

         foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
           $sentencia= $pdo->prepare("INSERT INTO tbldetalleventa
                               (idventa, idproducto, preciounitario, cantidad)
                               VALUES(
                               :idventa, :idproducto, :preciounitario, :cantidad
                               )
                               ");

             $sentencia->bindParam(":idventa", $idVenta);
             $sentencia->bindParam(":idproducto", $producto['ID']);
             $sentencia->bindParam(":preciounitario", $producto['PRECIO']);
             $sentencia->bindParam(":cantidad", $producto['CANTIDAD']);
             $sentencia->execute();

         }
         session_destroy();
         //echo "<h3> .$total. </h3>";

       }

  ?>
