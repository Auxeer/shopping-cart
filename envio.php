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



        <table class="table table-light table-bordered">
            <tbody>
              <tr>
                <td colspan="5">

                  <form action="compra.php" method="post">

                  <section id="checkout-container">
                      <div class="container">
                              <!-- Parte de datos de envio -->
                                  <h4 class="mb-3 text-center">Datos de Envio</h4>

                                      <div class="row">
                                          <div class="col-md-6 mb-3">
                                              <label for="firstName">Nombre</label>
                                              <input type="text" class="form-control" id="firstName" name="nnombre" placeholder="" value="" required>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                              <label for="lastName">Apellidos</label>
                                              <input type="text" class="form-control" id="lastName" name="aapellido" placeholder="" value="" required>
                                          </div>
                                      </div>



                                      <div class="mb-3">
                                          <label for="email">Correo Electronico</label>
                                          <input type="email" class="form-control" id="email" name="eemail" placeholder="Por favor escriba su correo" required>
                                      </div>

                                      <div class="mb-3">
                                          <label for="address">Direccion</label>
                                          <input type="text" class="form-control" id="address" name="ddireccion" placeholder="" required>
                                      </div>

                                      <div class="mb-3">
                                          <label for="address">Nit</label>
                                          <input type="text" class="form-control" id="nit" name="nnit" placeholder="" required>
                                      </div>

                                      <div class="row">
                                          <div class="col-md-5 mb-3">
                                              <label for="country">Pais</label>
                                              <select class="custom-select d-block w-100" id="country" name="ppais" required>
                                                  <option value="">Elige...</option>
                                                  <option>Guatemala</option>
                                              </select>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                              <label for="state">Departamento</label>
                                              <select class="custom-select d-block w-100" id="state" name="ddepartamento" required>
                                                  <option value="">Elige...</option>
                                                  <option>Guatemala</option>
                                                  <option>Izabal</option>
                                                  <option>Peten</option>
                                              </select>
                                          </div>
                                      </div>

                                      <hr class="mb-4">

                                      <h4 class="mb-3">Metodo de Pago</h4>

                                      <div class="d-block my-3">
                                          <div class="custom-control custom-radio">
                                              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                              <label class="custom-control-label" for="credit">Pago contra entrega</label>
                                          </div>
                                      </div>



                                      <hr class="mb-4">
                              <!-- Parte de datos de envio -->
                      </div>
                  </section>

                      <button class="btn btn-primary btn-lg  btn-block" type="submit" value="proceder" name="btnAccion">Realizar Compra</button>
                  </form>
                </td>
              </tr>


            </tbody>
        </table>

      </div>


<?php include 'pagina/footer.php';?>
