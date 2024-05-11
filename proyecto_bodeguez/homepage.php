<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BODEGUITA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<nav class="navbar bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand">BODEGUITA | SUSY DIAZ</a>
            <a href="index.php" class="btn-btn-secundary">Intranet</a>
        </div>
    </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2 class="text-center">Lista de Productos</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php
          #Requiero la conexion
          require_once 'conexion.php';
          #ALMACENAMOS EN LA VARIABLE $SQL 
          $sql = "SELECT * FROM tbl_prodcutos;";
          #Ejecutamos la consulta
          $resultado = $CONEXION->query($sql);
          while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)) {

          ?>
            <div class="col">
              <div class="card h-100">
                <img src="<?php echo "imagen_producto/" . $fila['imagen_producto']; ?>" class="card h-100" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $fila['nombre_prodcuto']; ?></h5>
                  <p class="card-text"><?php echo "S/." . $fila['precio_prodcuto']; ?></p>
                  <p class="card-text"><?php echo $fila['marca_producto']; ?></p>
                  <p class="card-text"><?php echo $fila['fecha_caducidad']; ?></p>
                </div>
                <div class="card-footer">
                  <button type="button" class="btn btn-success">AÑADIR CARRITO</button>
                </div>
              </div>
            </div>

          <?php
          }

          ?>

        </div>

      </div>
      <div class="col-md-4 border-start border-black" >
        <h2 class="text-center">Carrito</h2>
      </div>
    </div>
  </div>
</body>

</html>