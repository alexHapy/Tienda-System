<?php
session_start();
//print_r($_SESSION['data']);
$varRoles = $_SESSION['data']['roles'];

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
    <div class = "row">
       <div class="col-md-12"> 
      

    <?php 

       #Requiero la conexion
       require_once 'conexion.php';
       #ALMACENAMOS EN LA VARIABLE $SQL 
       $sql = "SELECT * FROM tbl_usuario;";
       #Ejecutamos la consulta
        $resultado = $CONEXION->query($sql);
        #MOSTRAMOS LOS DATOS
        echo "<table class= 'table'>";
        echo"<thead thead class='table-dark'>
            <th>ID</th> 
            <th>Roles</th>
            <th>usuario </th>
            <th>Fecha de Entrada</th>
            <th>Clave</th>
            <th>opciones</th> 
            </thead>";
        echo "<tbody>";
        while($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
            echo "<tr>
                    <td>".$fila['id_usuario']."</td>
                    <td>".$fila['roles']."</td>
                    <td>".$fila['nombres']."</td>
                    <td>".$fila['fecha_entrada']."</td>
                    <td>".$fila['username']."</td>
                    <td>".$fila['password']."</td>

                    <td>
                        <button type='button' class='btn btn-primary'>
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



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>