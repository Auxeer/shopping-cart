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

    <h2 class="titulo">Sport Shop</h2>

    <div class="comentario1">
      En nuestra Tienda Sport Shop encontraras los mejores articulos deportivos.
    </div>
    <br>


    <div class="container">
          <div class="row">
            <div class="col-4">
              <div class="carta">
                <br>
                <img src="images/camiseta.png" alt="">
                <h4>Camisas</h4>
              </div>
            </div>

            <div class="col-4">
              <div class="carta">
                <br>
                <img src="images/calzonetas.png" alt="">
                <h4>Calzonetas</h4>
              </div>
            </div>

            <div class="col-4">
              <div class="carta">
                <br>
                <img src="images/tenis.png" alt="">
                <h4>Tenis</h4>
              </div>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-4">
              <div class="">
                <br>

                <h4></h4>
              </div>
            </div>

            <div class="col-4">
              <div class="carta">
                <br>
                <img src="images/ball.png" alt="">
                <h4>Equipo Deportivo</h4>
              </div>
            </div>
          </div>

          <br>
          <div class="comentario1">
            Y mucho mas!
          </div>

          <div class="compra">
            <br>
            <form action="producto.php">
              <button type="submit" class="btn btn-outline-secondary">Comprar Ahora</button>
            </form>

          </div>

    </div>





<br>
<?php include 'pagina/footer.php';?>
