<?php
include 'global/config.php';
include 'global/conexion.php';
include 'funciones/carrito.php';
include 'funciones/pago.php';

include 'pagina/header.php'
 ?>



<br>
<br>
<br>
<br>

            <div class="container">
             <div class="jumbotron text-center">
                 <h1 class="display-4">¡Compra realizada!</h1>
                 <hr class="my-4">
                 <p class="lead"> Tu compra se ha realizado exitosamente con un total de:
                     <h4>Q<?php echo number_format($total,2); ?></h4>
                 </p>
                 <p class="my-4">
                   Tu producto seria enviado lo mas rapido posible, gracias por realizar tu compra.
                 </p>

                 <form action="index.php" method="">
                   <button class="btn btn-primary" type="submit" name="">Volver a Pagina</button>
                 </form>

             </div>
            </div>






<?php include 'pagina/footer.php';?>
