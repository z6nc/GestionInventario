
<head>
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
            <a href="Dashboard.php"> DashBoard</a>
          </li>
          <li id="navbar-usuarios">
            <i class="fas fa-key"></i>
            <ul>
              <li>Usuarios</li>
              <li><a href="../src/Agregar-usuario.php">Agregar usuario</a></li>
              <li><a href="../src/Usuarios-registro.php">Registro de usuarios</a></li>
            </ul>
          </li>
          <li>
          <i class="fas fa-box"></i>
            <a href="Proveedor.php">Proveedor</a>
          </li>
         
          <li>
          <i class="fas fa-tags"></i>  
          <a href="Categoria.php">Categorias</a>
        </li>
        <li id="navbar-inventario">
            <i class="fas fa-box-open"></i>  
            <ul>
              <li>Inventario</li>
              <li><a href="../src/productos-opciones.php">Registrar Producto</a></li>
              <li><a href="../src/productos.php">Lista de Producto</a></li>
            </ul>
          </li>
         
          <li>
          <i class="fas fa-exchange-alt"></i>
            <a href="Transacion.php">Transacciones</a>
          </li>
          <li>
          <i class="fas fa-utensils"></i>
          <a href="Menu.php">Menu</a>
        </li>
        
        </ul>
        <div class="botonCerrar">
        <i class="fas fa-door-open"></i>
          <a href="../mvc/SessionIniciada/CerrarSession.php">Cerrar Session</a>
        </div>
    </div>
</nav>

<style>
  
.navbar{
    display: flex;
   flex-direction: column;
   height: 100vh;
   grid-area: a;
  }
  .navbar .container{
   background-color:#16A085 ;
   color: white;
   letter-spacing: 1px;
   text-align: center;
   font-size: 15px;

  }
  .navbar .container-Second{
    background-color: #2A3542;
    list-style: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    height: 100%;
    overflow:hidden;
   
  }
  .navbar .container-Second ul{
   list-style: none;
   overflow:hidden;
   width: 100%;
 
  }
  .navbar .container-Second ul li {
    padding: 15px 0px;
    display: flex;
    align-items: center;
    gap: 7px;
   transition: all .1s ease-in-out;
   flex: none;

  }
  .navbar .container-Second ul li  i {
   color: white;
  }
  .navbar .container-Second > ul > li:hover {
   transform: scale(1.02);
   -webkit-transform: scale(1.02);
   -moz-transform: scale(1.02);
   -ms-transform: scale(1.02);
   -o-transform: scale(1.02);
}
  .navbar .container-Second ul li a{
   color: white;
   font-size: 17px;
    text-decoration: none;
    display: block;
  }
  .navbar .container-Second .botonCerrar{
    background-color: #16A085;
    width: 100%;
    padding: 20px 0px;
  }
  .navbar .container-Second .botonCerrar a{
  color: white;
  text-decoration: none;
  font-size: 17px;
  }
  .navbar .container-Second .botonCerrar i {
   color: white;
  padding-left: 14px;

  }

li#navbar-inventario,
li#navbar-usuarios{
  height: 17px;
  align-items: normal;
  color:white;
  overflow: hidden;
  transition: height .5s ease;
}

li#navbar-inventario > ul,
li#navbar-usuarios > ul{
  padding:0px;
}

li#navbar-inventario > ul > :first-child,
li#navbar-usuarios > ul > :first-child{
  padding:0px 0px 15px 0px;
  cursor:default;
}

li#navbar-inventario > ul > li,
li#navbar-usuarios > ul > li{
  display:block;
  cursor:pointer;
  padding:10px 0px 16px 0px;
}

li#navbar-inventario > ul > li:hover:not(:first-child),
li#navbar-usuarios > ul > li:hover:not(:first-child) {
  background: #5e7694;
  padding-left:7px;
  cursor:pointer;
}

li#navbar-inventario:hover,
li#navbar-usuarios:hover{
  height: 125px;    
}

  

</style>


