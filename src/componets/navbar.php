<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/Font.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap">
  <link rel="stylesheet" href="../css/EstilosPrincipal.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="font-Secundario">
<nav class="navbar ">
    <div class="container">
        <h2 class="font-Principal">DONSHOSHI - Inventario</h2>
    </div>
    <div class="container-Second">
        <ul>
          <li>
          <i class="fas fa-home"></i>
            <a href=""> Panel de Inicio</a>
          </li>
          <li>
          <i class="fas fa-key"></i>
            <a href="">Acceso</a>
          </li>
          <li>
          <i class="fas fa-box"></i>
            <a href="">Proveedor</a>
          </li>
          <li>
          <i class="fas fa-box-open"></i>  
          <a href="">Inventario</a>
        </li>
          <li>
          <i class="fas fa-tags"></i>  
          <a href="">Categoria</a>
        </li>
          <li>
          <i class="fas fa-utensils"></i>
          <a href="">Menu</a>
        </li>
          <li>
          <i class="fas fa-carrot"></i>
            <a href="">Ingredientes</a>
          </li>
          <li>
          <i class="fas fa-receipt"></i>  
          <a href="">Gastos</a>
        </li>
          <li>
          <i class="fas fa-chart-bar"></i>
            <a href="">Reportes</a>
          </li>

        </ul>
        <div class="botonCerrar">
        <i class="fas fa-door-open"></i>
          <a href="">Cerrar Session</a>
        </div>
    </div>
</body>
<style>
  .navbar{
    display: flex;
   background:red;
   flex-direction: column;
   max-width:300px;
   height: 100vh;

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
   
  }
  .navbar .container-Second ul{
   list-style: none;
   width: 100%;
 
  }
  .navbar .container-Second ul li {
    padding: 15px 0px;
    display: flex;
    align-items: center;
    gap: 7px;
   transition: all .1s ease-in-out;

  }
  .navbar .container-Second ul li  i {
   color: white;
  }
  .navbar .container-Second ul li:hover {
   transform: scale(1.05);
}
  .navbar .container-Second ul li a{
   color: white;
   font-size: 17px;
    text-decoration: none;
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
</style>
</html>