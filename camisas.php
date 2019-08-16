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

      <section class="main">
        <div class="container">

          <?php if ($mensaje!="") { ?>
            <div class="alert alert-success">
                <?php echo $mensaje; ?>

                <a class="badge badge-success" href="pCarrito.php">Ver Carrito</a>
            </div>
          <?php } ?>

          <h2 class="titulo">Camisas</h2>


          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ver
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item" href="producto.php">Articulos</a>
                  <a class="dropdown-item" href="equipo.php">Equipo</a>
                  <a class="dropdown-item" href="camisas.php">Camisas</a>
                  <a class="dropdown-item" href="calzonetas.php">Calzonetas</a>
                  <a class="dropdown-item" href="tenis.php">Tenis</a>
                </div>
              </div>
          </div>


          <div class="row">
            <?php
                $sentencia = $pdo->prepare("SELECT * FROM tblproductos WHERE tblproductos.categoria = 'camisa'");
                $sentencia->execute();
                $listaProductos = $sentencia->fetchALL(PDO::FETCH_ASSOC);
                //print_r($listaProductos);
             ?>

             <?php foreach ($listaProductos as $producto) { ?>
            <div class="col-3">

                    <div class="card">
                      <div class="face face1">
                        <div class="content">
                          <img src="<?php echo $producto['imagen']; ?>">
                          <h3><?php echo $producto['nombre']; ?></h3>
                      </div>
                      </div>

                      <div class="face face2">
                        <div class="content">
                          <p><?php echo $producto['descripcion']; ?></p>
                          <h2>Q<?php echo $producto['precio']; ?></h2>

                          <form action="" method="post">
                            <label for="cant">Cantidad:</label>
                            <select class="selc" name="cant" id="cant" onchange="">
                              <?php
                                for($i = 1; $i <= $producto['cantidad']; $i++)
                                    {
                                        echo "<option value=". $i .">". $i ."</option>";
                                    }
                               ?>
                               
                             <input type="hidden" name="id"       id="id"             value="<?php echo openssl_encrypt($producto['id'], COD,KEY); ?>">
                             <input type="hidden" name="nombre"   nombre="nombre"     value="<?php echo openssl_encrypt($producto['nombre'], COD,KEY); ?>">
                             <input type="hidden" name="precio"   precio="precio"     value="<?php echo openssl_encrypt($producto['precio'], COD,KEY); ?>">
                             <input type="hidden" name="cantidad" cantidad="cantidad" value="<?php echo openssl_encrypt(1, COD,KEY); ?>">

                                   <button class="btn btn-primary"
                                    name="btnAccion"
                                    value="Agregar"
                                    type="submit"> Agregar al Carrito
                                    </button>
                          </form>

                        </div>
                      </div>
                    </div>

              </div>
            <?php }  ?>
            </div>
        </div>
      </section>


<?php include 'pagina/footer.php';?>
