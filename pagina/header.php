<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sport Shop</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="jquery.js"></script>

    </script>

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg  fixed-top">

            <a class="logotipo navbar-brand" href="index.php"><img src="images/logo.png"></a>

                <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
                        <span class="navbar-toggler-icon"></span>
                </button>

                <div id="my-nav" class="collapse navbar-collapse">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item active"><a class="nav-link" href="producto.php">Productos</a></li>
                  </ul>

                  <ul class="navbar-nav pull-right">
                    <!--<li class="nav-item active carrito"><a class="nav-link" href="#"><img src="images/cart.png"></a></li>-->
                    <a class="navbar-brand carrito" href="pCarrito.php"><img src="images/cart.png">(<?php
                        echo (empty($_SESSION["CARRITO"]))?0:count($_SESSION["CARRITO"]);
                     ?>)</a>
                  </ul>

                </div>
      </nav>





    </header>
