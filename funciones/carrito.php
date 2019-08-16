<?php
session_start();


$mensaje="";

if (isset($_POST['btnAccion'])) {

    switch ($_POST['btnAccion']) {
      case 'Agregar':

          //Desencriptar valores
          if (is_numeric(openssl_decrypt($_POST['id'],COD,KEY))) {
            $ID=openssl_decrypt($_POST['id'],COD,KEY);
            $mensaje.="Ok ID correcto ".$ID."<br/>";
          } else { $mensaje.="Upss... ID incorrecto".$ID."<br/>"; break;}

          if (is_string(openssl_decrypt($_POST['nombre'],COD,KEY))) {
            $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
            $mensaje.="Ok Nombre correcto ".$NOMBRE."<br/>";
          } else { $mensaje.="Upss... Nombre incorrecto".$NOMBRE."<br/>"; break;}

          if (is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))) {
            $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
            $mensaje.="Ok Cantidad correcta ".$CANTIDAD."<br/>";
            $CANTIDAD = $_POST['cant'];
          } else { $mensaje.="Upss... Cantidad incorrecta".$CANTIDAD."<br/>"; break;}

          if (is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))) {
            $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
            $mensaje="Ok Precio correcto".$PRECIO."<br/>";
          } else { $mensaje="Upss... Precio incorrecto ".$PRECIO."<br/>"; break;}

          //Pasar valores desencriptados a un array
          if(!isset($_SESSION["CARRITO"])){
              $producto = array(
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'CANTIDAD'=>$CANTIDAD,
                'PRECIO'=>$PRECIO
              );

              $_SESSION['CARRITO'][0]=$producto;
              $mensaje = "Producto agregado al carrito";

          } else {

              $idProductos= array_column($_SESSION['CARRITO'],"ID");
              if(in_array($ID, $idProductos)){
                  //"<script>alert('El producto ya ha sido seleccionado..');</script>";
                  $mensaje= "El producto ya ha sido seleccionado..";
              } else{

                $NumeroProductos = count($_SESSION['CARRITO']);

                $producto = array(
                  'ID'=>$ID,
                  'NOMBRE'=>$NOMBRE,
                  'CANTIDAD'=>$CANTIDAD,
                  'PRECIO'=>$PRECIO
                );

                  $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                    $mensaje = "Producto agregado al carrito";
              }
          }

          //$mensaje = print_r($_SESSION, true);

        break;

        case 'Eliminar':

                if (is_numeric(openssl_decrypt($_POST['id'],COD,KEY))) {
                          $ID=openssl_decrypt($_POST['id'],COD,KEY);

                          foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
                              if ($producto['ID']==$ID) {
                                unset($_SESSION['CARRITO'][$indice]);
                                //echo "<script>alert('Elemento borrado...');</script>";
                              }
                          }

                } else {  $mensaje.="Upss... ID incorrecto".$ID."<br/>";}

        break;

    }


}


 ?>
