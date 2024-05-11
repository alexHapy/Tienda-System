<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            z-index: -1;
        }

        .container {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: center; /* Centra el contenido horizontalmente */
            align-items: center; /* Centra el contenido verticalmente */
            height: 100vh; /* Ajusta la altura al 100% del viewport */
        }

        .form-container {
            width: 100%;
            max-width: 400px; /* Ajusta el ancho máximo según tus necesidades */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Fondo semi-transparente para mejorar la legibilidad */
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <video src="videoA - Trim.mp4" autoplay loop muted></video>

    <div class="container">
        <div class="form-container bg border border-dark rounded-1">
            <form action="conexionLogin.php" method="POST">
                <div class="mb-3">
                    <h2>Iniciar Sesión</h2>
                </div>
                <div class="mb-3">
                    <label class="form-label">Usuario: </label>
                    <input type="text" name="usuario" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Contraseña: </label>
                    <input type="password" name="clave" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mb-3 d-block mx-auto">Iniciar Sesión</button>
            </form>
        </div>
    </div>

    <?php
    if(isset($_GET['error']) && $_GET['error'] == 1){
    ?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Usuario o contraseña incorrecta",
            showConfirmButton: false
        });
    </script>
    <?php
    } elseif(isset($_GET['success']) && $_GET['success'] == 1) {
    ?>
    <script>
        Swal.fire({
            icon: "success",
            title: "¡Inicio de sesión exitoso!",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
    }
    ?>

</body>

</html>
