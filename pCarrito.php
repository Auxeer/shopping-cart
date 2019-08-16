<?php
include 'global/config.php';
include 'global/conexion.php';
include 'funciones/carrito.php';

include 'pagina/header.php'
?>

<br>
<br>
<br>
<br>

    <div class="container">

      <div class="lista">
        <h3>Lista del Carrito</h3>
      </div>

      <?php if (!empty($_SESSION['CARRITO'])) { ?>

    <table class="table table-dark table-bordered">


                      <tbody>
                        <tr>
                              <th width="40%">Descripcion</th>
                              <th width="15%" class="text-center">Cantidad</th>
                              <th width="20%" class="text-center">Precio</th>
                              <th width="20%" class="text-center">Total</th>
                              <th width="5%" class="text-center">--</th>
                        </tr>


                        <?php $total = 0; ?>
                        <?php
                        foreach ($_SESSION['CARRITO'] as $indice=>$producto) { ?>
                          <tr>
                                <td width="40%"><?php echo $producto['NOMBRE'] ?></td>
                                <td width="15%" class="text-center">
                                  <?php echo $producto['CANTIDAD'] ?>
                                </td>

                                <td width="20%" class="text-center">Q<?php echo $producto['PRECIO'] ?></td>
                                <td width="20%" class="text-center">Q<?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'],2); ?></td>
                                <td width="5%">
                                    <form action="" method="post">
                                        <input type="hidden" name="id"       id="id"             value="<?php echo openssl_encrypt($producto['ID'], COD,KEY); ?>">
                                           <button class="btn btn-danger" type="submit"
                                           name="btnAccion"
                                           value="Eliminar">Eliminar</button>
                                    </form>
                                </td>

                          </tr>
                        <?php $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']); ?>
                        <?php } ?>

                        <tr>
                              <td colspan="3" align="right"><h3>Total</h3></td>
                              <td align="right"><h3>Q <?php echo number_format($total,2); ?></h3></td>
                              <td></td>

                        </tr>

                        <tr>
                          <td colspan="5">
                            <form action="envio.php">
                                <button class="btn btn-primary btn-lg  btn-block" type="submit">Proceder Compra</button>
                            </form>
                          </td>
                        </tr>

                      </tbody>
              </table>

            <?php } else { ?>

                <br>
                <div class="alert alert-success">
                  No hay productos en el carrito...
                </div>

            <?php  } ?>



    </div>







<?php include 'pagina/footer.php';?>
