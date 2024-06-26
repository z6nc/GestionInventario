
<head>
    <link rel="stylesheet" href="css/navbarPrincipal.css">
</head>
<nav class="navbar ">
    <div class="container">
        <h2 class="font-Principal">DONSHOSHI - Inventario</h2>
    </div>
    <div class="container-Second">
        <ul>
          <li>
          <i class="fas fa-home"></i>
            <a href="Inicio.php"> Panel de Inicio</a>
          </li>
          <li>
            <i class="fas fa-tachometer-alt"></i>
            <a href="Inicio.php"> DashBoard</a>
          </li>
          <li>
          <i class="fas fa-key"></i>
            <a href="">Usuarios</a>
          </li>
          <li>
          <i class="fas fa-box"></i>
            <a href="Proveedor.php">Proveedor</a>
          </li>
          <li id="navbar-inventario">
          <i class="fas fa-box-open"></i>  
          <ul>
            <li>Inventario</li>
            <li><a href="../src/productos-opciones.php">Registrar Producto</a></li>
            <li><a href="../src/productos.php">Listar Producto</a></li>
            <li><a href="../src/productos.php">Productos por vencer</a></li>
          </ul>
        </li>
          <li>
          <i class="fas fa-tags"></i>  
          <a href="Categoria.php">Categorias</a>
        </li>
          <li>
          <i class="fas fa-utensils"></i>
          <a href="Menu.php">Menu</a>
        </li>
          <li>
          <i class="fas fa-carrot"></i>
            <a href="">Ingredientes</a>
          </li>
          <li>
          <i class="fas fa-chart-line"></i>  
          <a href="">Reportes</a>
        </li>

        </ul>
        <div class="botonCerrar">
        <i class="fas fa-door-open"></i>
          <a href="../mvc/SessionIniciada/CerrarSession.php">Cerrar Session</a>
        </div>
    </div>
</nav>


