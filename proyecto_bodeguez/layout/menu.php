<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php">BODEGUITA SYSTEM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">INCIO PRINCIPAL</a>

          <?php 
            if($varRoles == 'administrador'){?> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Usuarios
                </a>
                <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="reportesUsuarios.php">Reportes</a></li>
          </ul>
              </li>
              <?php
                
            
            }else{
              

            }
            ?>

       
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Productos
                </a>
                <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="reportesProductos.php">reportes</a></li>
          </ul>
              </li>
      </ul>
     
        <a href = "cerrar_sesion.php" class="btn btn-danger" >Cerrar Sesión</a> </a>
      
    </div>
  </div>
</nav>