<?php
session_start();
$varRoles = isset($_SESSION['data']['roles']) ? $_SESSION['data']['roles'] : null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!--Menus inicio -->
    <?php include_once 'layout/menu.php'; ?>
    <!-- Menus final-->

    <div class="container my-2">
        <div class="row">
            <div class="col-md-12">
                <form action="#" action="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Producto</label>
                            <input type="text" id="productNameInput" class="form-control">
                            <br>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Precio</label>
                            <input type="text" id="productPriceInput" class="form-control">
                            <br>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Marca</label>
                            <input type="text" id="productBrandInput" class="form-control">
                            <br>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Fecha de caducidad</label>
                            <input type="text" id="productExpiryDateInput" class="form-control">
                            <br>
                        </div>
                        <div class="col-md-2">
                            <button id="updateProductButton" class="btn btn-success">Actualizar Producto</button>
                            <br>
                            <button id="newProductButton" class="btn btn-secondary">Nuevo Producto</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <h2>REPORTES DE PRODUCTOS</h2>
                <button id="addProductButton" type="button" class="btn btn-primary">Agregar Producto</button>
                <br>
                <button id="refreshButton" class="btn btn-info">Refrescar página</button>


                <?php
                #Requiero la conexion
                require_once 'conexion.php';
                #ALMACENAMOS EN LA VARIABLE $SQL 
                $sql = "SELECT * FROM tbl_prodcutos;";
                #Ejecutamos la consulta
                $resultado = $CONEXION->query($sql);
                #MOSTRAMOS LOS DATOS
                echo "<table class= 'table'>";
                echo "<thead thead class='table-dark'>
            <th>Id_producto</th> 
            <th>nombre </th>
            <th>precio</th>
            <th>marca </th>
            <th>fecha de caducidad</th>
            <th>opcion</th>
            </thead>";

                echo "<tbody>";
                while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)) {
                    echo "<tr>
                    <td>" . $fila['id_producto'] . "</td>
                    <td class='product-name'>" . $fila['nombre_prodcuto'] . "</td>
                    <td class='product-price'>" . $fila['precio_prodcuto'] . "</td>
                    <td class='product-brand'>" . $fila['marca_producto'] . "</td>
                    <td class='product-expiry-date'>" . $fila['fecha_caducidad'] . "</td>
                    <td>
                        <button type='button' class='btn btn-primary edit-product'>
                            <i class='bi bi-pencil-square'></i>
                        </button>
                        <button type='button' class='btn btn-danger'>
                            <i class='bi bi-trash'></i>
                        </button>
                    </td>
                </tr>";
                }
                echo "</tbody>";
                echo "</table>";
                ?>

                <div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function clearInputs() {
            document.getElementById('productNameInput').value = '';
            document.getElementById('productPriceInput').value = '';
            document.getElementById('productBrandInput').value = '';
            document.getElementById('productExpiryDateInput').value = '';
        }

        document.getElementById('addProductButton').addEventListener('click', function() {
            clearInputs();
        });
        var editButtons = document.querySelectorAll('.edit-product');
        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                document.getElementById('newProductButton').style.display = 'none';

                var row = this.closest('tr');

                var productName = row.querySelector('.product-name').textContent;
                var productPrice = row.querySelector('.product-price').textContent;
                var productBrand = row.querySelector('.product-brand').textContent;
                var productExpiryDate = row.querySelector('.product-expiry-date').textContent;
                
                document.getElementById('productNameInput').value = productName;
                document.getElementById('productPriceInput').value = productPrice;
                document.getElementById('productBrandInput').value = productBrand;
                document.getElementById('productExpiryDateInput').value = productExpiryDate;

    document.getElementById('addProductButton').addEventListener('click', function() {
        clearInputs();
        

        document.getElementById('updateProductButton').style.display = 'none';
        document.getElementById('refreshButton').addEventListener('click', function() {

        location.reload();
    });
    });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

